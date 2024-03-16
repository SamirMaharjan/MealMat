@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            HIM
        @endslot
        @slot('li_2')
        Dietician
        @endslot
        @slot('li_3')
            Create
        @endslot
        @slot('title')
        Dietician
        @endslot
    @endcomponent

    <form action="{{ route('store-product') }}" id="myForm" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        {{-- <input type="hidden" name="id" value="{{ base64_encode($user->id) }}"> --}}
        <div class="row p-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sub User Information</h4>
                        <p class="text-muted mb-0">Fill The Form below to Update new Sub User
                        </p>
                    </div><!--end card-header-->
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label"> Name</label>

                                            <input required type="text" name="name" class="form-control"
                                                parsley-type="text" placeholder="Enter  Name">


                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">price</label>

                                            <input required type="text" name="price" class="form-control"
                                                parsley-type="text" placeholder="Enter  price">


                                            <span class="text-danger">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Description</label>

                                    <textarea required type="text" name="description" class="form-control" parsley-type="text"
                                        placeholder="Description"></textarea>


                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Category</label>

                                    <select class="select2" name="goal" id="">
                                        <option value="weight gain">Weight Gain</option>
                                        <option value="weight loss">Weight Loss</option>
                                        <option value="weight maintain">Weight Maintain</option>
                                    </select>


                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                             



                            </div><!-- end col -->

                        
                        </div><!-- end row -->

                        <button class="btn btn-primary text-white" type="submit">Create Product</button>
                    </div><!-- end card-body -->

                </div> <!-- end card -->
            </div> <!-- end col -->

        </div>

    </form>
@endsection
@section('script')
    <script>
        $('#myForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally



            let isValid = true;
            var toastContainer = $('#warning-toast').find('.toast-container');
            toastContainer.empty();
            var isFirstIteration = true;
            $(this).find('[required]').each(function() {
                $(this).siblings('.error-message').remove();

                if ($(this).val() === '') {
                    isValid = false; // If a required field is empty, set isValid to false
                    $(this).addClass('error'); // Optionally, add a CSS class for styling
                    // $(this).siblings('label').addClass('error'); // Optionally, add a CSS class for styling
                    $(this).siblings('.error-message').remove();
                    var name = $(this).siblings('label').text().trim(); // Get label text
                    if (!name) {
                        name = $(this).attr(
                            'name'); // If label text is empty, get the name attribute
                        var parts = name.split('[question]').filter(Boolean);

                        // Join the parts with spaces
                        var convertedName = parts.join('Question ');
                        convertedName = convertedName.replace(
                            /\[|\]|\_/g, ' ').trim();
                        name = convertedName;
                    }


                    $(this).before(' <span class="error-message error">*' + name +
                        ' is required</span>');
                    if (isFirstIteration) {

                        isFirstIteration = false;
                        var errorPosition = $(this).siblings('.error-message').offset().top;
                        $('html, body').animate({
                            scrollTop: (errorPosition - 50)
                        }, 500);

                        $(this).css('border', '1px solid red');
                        $(this).focus();
                    }
                    var toast = $('#toast-content').first().clone();
                    toast.find('h5').text(
                        `${name} is required`, );
                    toast.removeClass('d-none');
                    toast.toast({
                        autohide: true
                    });
                    var toastContainer = $('#warning-toast').find('.toast-container');
                    toastContainer.children('.toast').hide();
                    toastContainer.append(toast);
                    toastContainer.children('.toast').removeClass('d-none');
                    toastContainer.children('.toast').show({
                        autohide: true
                    });
                    // $(this).css('border', '1px solid yellow');

                } else {
                    $(this).removeClass('error'); // Optionally, add a CSS class for styling
                    $(this).siblings('label').removeClass('error');
                    $(this).siblings('.error-message').remove();
                    $(this).css('border', '').focus();
                    if ($(this).attr('type') === 'email' && !isValidEmail($(this).val())) {
                        var name = $(this).siblings('label').text().trim(); // Get label text
                        if (!name) {
                            name = $(this).attr(
                                'name'); // If label text is empty, get the name attribute
                            var parts = name.split('[question]').filter(Boolean);

                            // Join the parts with spaces
                            var convertedName = parts.join('Question ');
                            convertedName = convertedName.replace(
                                /\[|\]|\_/g, ' ').trim();
                            name = convertedName;
                        }

                        name += ' Invalid email';
                        isValid = false;
                        $(this).before(' <span class="error-message error">*' + name +
                            '</span>');
                        if (isFirstIteration) {

                            isFirstIteration = false;
                            var errorPosition = $(this).siblings('.error-message').offset().top;
                            $('html, body').animate({
                                scrollTop: (errorPosition - 50)
                            }, 500);

                            $(this).css('border', '1px solid red');
                            $(this).focus();
                        }

                    }

                }


            });

            // Call the validation function when the form is submitted
            if (isValid) {

                $('#myForm').unbind('submit').submit();
            } else {
                return false
            }
        });

        function isValidEmail(email) {
            // Use a regular expression to check for a valid email format
            var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
            return emailRegex.test(email);
        }
    </script>
    <script>
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('password').value = '';
            }, 100);
        }
    </script>
@endsection
