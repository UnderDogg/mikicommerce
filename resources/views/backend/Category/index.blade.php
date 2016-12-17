@extends ('backend.layouts.master')


@section ('title',trans('eav.eav_category_management'))

@section('after-styles-end')
    {!! HTML::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
    {!! HTML::style('css/backend/plugin/nestable/jquery.nestable.css') !!}
@endsection


@section('page-header')
    <h1>
        {{ trans('eav.eav_category_management') }}
        <small>{{ trans('eav.active_eav_category') }}</small>
    </h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i> Here is the list of categories and subcategories.<br />
                <a href="{{route('admin.category.create')}}"><i class="fa fa-plus"> </i> {{ trans('category.add_new_category') }}</a>
            </div><!--alert info-->

<?php
/*echo "<pre>";
print_r($categories);
echo "</pre>";*/
?>

            <div class="dd permission-hierarchy">
                <ol class="dd-list">
                    <li class="dd-item" data-id="">
                        @if ($categorys->count())
                            @foreach($categories as $category)

                                @if($category->parent_id == NULL)
                                    {{--
                                    @foreach ($category->category_description->category_description_translations as $trans)
                                    @foreach ($categories as $category)
                                    {{--@foreach ($category->children as $children)
                                    <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td><a class="edit" href="{!! action('Admin\CategoriesController@edit', $category->id) !!}" title="Edit"><i class="fa fa-pencil-square-o"></a></i> <a class="delete" href="{!! action('Admin\CategoriesController@destroy', $category->id) !!}" title="Are you sure you want to delete?"><i class="fa fa-trash-o"></i></a></td>
                                    @foreach ($category->children as $children)
                                    <tr>
                                    <td>{{ $children->name }}</td>
                                    <td>{{ $children->description }}</td>
                                    <td>{{ $children->slug }}</td>
                                    <td></td>
                                    </tr>
                                    @endforeach
                                    </tr>
                                    </tbody>
                                    {{--@endforeach
                                    @endforeach--}}
                                    <div class="dd-handle"><a href="{{route('admin.category.show',$category->id)}}"> {!! $trans->name !!} </a>
                                        <span class="pull-right">{!! $category->getDeleteButtonAttribute()  !!}</span></div>
                                    @endforeach --}}
                                    <ol class="dd-list">
                                        @foreach($categorys as $category_h)
                                          @if($category_h->parent_id == $category->id)


                                                <li class="dd-item" data-id="{!! $category->id !!}">
                                                    <div class="dd-handle"><a href="{{route('admin.category.show',$category_h->id)}}">{!! $category->name !!} </a>
                                                        <span class="pull-right">{!! $category_h->getDeleteButtonAttribute()  !!}  <a href="{{route('admin.category.destroy',$category_h->id)}}">  </a> </span></div>
                                                </li>


                                                {{--@foreach ($category_h->category_description->category_description_translations as $trans)

                                                    <li class="dd-item" data-id="{!! $category->id !!}">
                                                        <div class="dd-handle"><a href="{{route('admin.category.show',$category_h->id)}}">{!! $trans->name !!} </a>
                                                            <span class="pull-right">{!! $category_h->getDeleteButtonAttribute()  !!}  <a href="{{route('admin.category.destroy',$category_h->id)}}">  </a> </span></div>
                                                    </li>
                                                @endforeach --}}

                                          @endif
                                        @endforeach
                                    </ol>
                                @endif
                            @endforeach
                        @else
                    @endif
                    </li>
                </ol>
            </div><!--master-list-->
        </div><!--col-lg-4-->
    </div>
@endsection

@section('after-scripts-end')
    {!! HTML::script('js/backend/plugin/nestable/jquery.nestable.js') !!}
@stop