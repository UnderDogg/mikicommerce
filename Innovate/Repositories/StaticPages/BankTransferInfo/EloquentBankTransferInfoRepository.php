<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:59 PM.
 */
namespace Innovate\Repositories\StaticPages\BankTransferInfo;

use App\Exceptions\GeneralException;
use Innovate\StaticPages\BankTransferInfo\BankTransferInfo;

/**
 * Class EloquentBankTransferInfoRepository.
 */
class EloquentBankTransferInfoRepository implements BankTransferInfoContract
{
    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $bankinfo = BankTransferInfo::withTrashed()->find($id);

        if (!is_null($bankinfo)) {
            return $bankinfo;
        }

        throw new GeneralException('That Bank Information. does not exist.');
    }

    /**
     * @param $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return BankTransferInfo::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getDeletedPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return BankTransferInfo::onlyTrashed()->paginate($per_page);
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {
        return BankTransferInfo::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create($input)
    {
        $bankinfo = $this->createBankTransferInfoStub($input);

        if ($bankinfo->save()) {
            return true;
        }

        throw new GeneralException('There was a problem creating this Bank Information. Please try again!');
    }

    /**
     * @param $id
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function update($id, $input)
    {
        $bankinfo = $this->findOrThrowException($id);

        if ($bankinfo->update($input)) {
            return true;
        }
        throw new GeneralException('There was a problem updating this Bank Information. Please try again.');
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $bankinfo = $this->findOrThrowException($id);
        if ($bankinfo->delete()) {
            return true;
        }

        throw new GeneralException('There was a problem deleting this Bank Information.. Please try again.');
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function delete($id)
    {
        $bank = $this->findOrThrowException($id, true);

        try {
            $bank->forceDelete();
        } catch (\Exception $e) {
            throw new GeneralException($e->getMessage());
        }
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function restore($id)
    {
        $bank = $this->findOrThrowException($id);

        if ($bank->restore()) {
            return true;
        }

        throw new GeneralException('There was a problem restoring this Bank Information. Please try again.');
    }

    /**
     * @param $input
     *
     * @return Tax
     */
    private function createBankTransferInfoStub($input)
    {
        $bankinfo = new BankTransferInfo();
        $bankinfo->bank_name = $input['bank_name'];
        $bankinfo->bank_account_no = $input['bank_account_no'];
        $bankinfo->support_phone = $input['support_phone'];
        $bankinfo->description = $input['description'];

        return $bankinfo;
    }
}
