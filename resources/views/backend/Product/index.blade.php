@extends ('backend.layouts.master')

@section('after-styles-end')
    {!! HTML::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
@endsection


@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('product.product_management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.Product.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('product.product_id') }}</th>
                        <th>{{ trans('product.product_name') }}</th>

                        <th class="visible-lg">{{ trans('product.product_sku') }}</th>

                        <th>{{ trans('category.category_name') }}</th>
                        <th>{{ trans('crud.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products->count() )
                        @foreach ($products as $product)
                            <tr>
                                <td>{!! $product->id !!}</td>
                                <td>{!! $product->name !!}</td>

                                <td class="visible-lg">{!! $product->sku !!}</td>


                                <td>{!! $product->category->name !!}</td>
                                <td>{!! $product->getActionButtonsAttribute() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>


    <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
    @endsection

@section('after-scripts-end')
    {!! HTML::script('css/backend/plugin/datatables/jquery.dataTables.min.js') !!}
    {!! HTML::script('css/backend/plugin/datatables/dataTables.bootstrap.min.js') !!}
    <script>
        $(function () {
            $('#datatable1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": true
            });
        });
    </script>

@endsection