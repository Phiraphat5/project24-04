@extends('layouts.master_backend')
@section('content')
    <div class="dashboard-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-9">
                        <h5 class="card-header">Edit product</h5>
                        <div class="card-body">
                            <form action="{{ url('admin/product/update/' . $pro->product_id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ $pro->name }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                        aria-describedby="defaultFormControlHelp" />


                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input type="text" name="price" value="{{ $pro->price }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="กรุณากรอกราคาสินค้า"
                                        aria-describedby="defaultFormControlHelp" />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input type="text" name="description" value="{{ $pro->description }}"
                                        class="form-control" id="defaultFormControlInput"
                                        placeholder="กรุณากรอกรายละเอียดสินค้า" aria-describedby="defaultFormControlHelp" />


                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                            @foreach ($cat as $c)
                                                <option value="{{ $c->category_id }}"
                                                    @if ($c->category_id == $pro->category_id) selected @endif>
                                                    {{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                    <div class="input-group">
                                        <input name="image" type="file" class="form-control" id="inputGroupFile02" id="image2" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>


                                    <div class="row mb-3 mt-4">
                                        <div class="col-12">
                                            <img id="showImage2" class="rounded avatar-lg" src="{{ asset('backend/product/' . $pro->image) }}" width="250"
                                                alt="Card image cap" >
                                        </div>
                                    </div>

                                    <input type="submit" value= "อัพเดท" class="btn btn-primary mt-3">
                                    <a href="{{ route('p.product') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
