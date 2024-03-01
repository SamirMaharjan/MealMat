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
            Client
        @endslot
        @slot('li_3')
            Create
        @endslot
        @slot('title')
            Client
        @endslot
    @endcomponent
    <form action="{{ route('client-store') }}" id="myForm" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row p-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Client Information</h4>
                        <p class="text-muted mb-0">Fill The Form below to create new Client
                        </p>
                    </div><!--end card-header-->
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label class="form-label">Client Organization Name</label>
                                    <div>
                                        <input required type="text" name="org_name" class="form-control"
                                            parsley-type="text" placeholder="Enter a Subscription Package Name">

                                    </div>
                                    <span class="text-danger">
                                        @error('org_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Organization Email Address</label>
                                    <div>
                                        <input required type="email" name="org_email" class="form-control"
                                            parsley-type="text" placeholder="Enter a Subscription Package Name">

                                    </div>
                                    <span class="text-danger">
                                        @error('org_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div>
                                                <input required type="password" name="password" class="form-control"
                                                    parsley-type="password" placeholder="password">

                                            </div>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div>
                                                <input required type="password" name="password_confirmation"
                                                    class="form-control" parsley-type="password"
                                                    placeholder="confirm password">

                                            </div>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Organization Contact</label>
                                    <div>
                                        <input required type="text" name="contact" class="form-control"
                                            parsley-type="text" placeholder="923 *** ****">

                                    </div>
                                    <span class="text-danger">
                                        @error('contact')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Organization Owner Full Name</label>
                                    <div>
                                        <input required type="text" name="owner_full_name" class="form-control"
                                            parsley-type="text" placeholder="Enter a Subscription Package Name">

                                    </div>
                                    <span class="text-danger">
                                        @error('owner_full_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Organization Owner Email</label>
                                    <div>
                                        <input required type="email" name="owner_email" class="form-control"
                                            parsley-type="text" placeholder="Enter a Subscription Package Name">

                                    </div>
                                    <span class="text-danger">
                                        @error('owner_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label class="mb-3 form-label">Organization Type</label>
                                    <select name="org_type" id="org_type" class="select2 form-control mb-3 custom-select"
                                        style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach ($organization_type as $org_type)
                                            <option value="{{ $org_type->id }}">{{ $org_type->org_type }}</option>
                                        @endforeach

                                    </select>
                                    <span class="text-danger">
                                        @error('org_type')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="form-group">
                                    <label class="mb-3 form-label">Organization Specialization</label>
                                    <select id="tag-suggestions" name="specialization[]"
                                        class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple"
                                        data-placeholder="Choose">

                                    </select>
                                    <span class="text-danger">
                                        @error('org_type')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="form-group">
                                    <label class="mb-3 form-label">Subscription Package</label>
                                    <select name="subscription_package" class="select2 form-control mb-3 custom-select"
                                        style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach ($subscription_list as $subscription)
                                            <option value="{{ $subscription->id }}">{{ $subscription->name }}</option>
                                        @endforeach

                                    </select>
                                    <span class="text-danger">
                                        @error('subscription_package')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>

                                <div class="form-group">
                                    <label class="form-label">Organization Description</label>
                                    <div>
                                        <textarea name="org_description" class="form-control" parsley-type="text"> </textarea>

                                    </div>
                                    <span class="text-danger">
                                        @error('owner_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div><!-- end col -->
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">File Upload 3</h4>
                                        <p class="text-muted mb-0">You can set the height</p>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <input type="file" id="input-file-now-custom-2" name="image"
                                            class="dropify" data-height="500" />
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!-- end row -->

                        <button class="btn btn-primary text-white" type="submit">Create Client</button>
                    </div><!-- end card-body -->

                </div> <!-- end card -->
            </div> <!-- end col -->

        </div>

    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Reference to the input field and tag suggestions element
            var org_type = $("#org_type");
            // var $tagsInput = $(".select2-search__field");

            var $tagSuggestions = $("#tag-suggestions");
            // var $tagSuggestions = $(".select2-results__options");

            // Event handler for key input
            org_type.on("change", read_input)

            function read_input() {
                // Get the user's input
                var id = $(this).val();

                // Make an AJAX request to fetch tag suggestions
                $.ajax({
                    method: "GET",
                    url: "{{ route('get_organizationtype_specialization') }}", // Replace with your Laravel API endpoint
                    data: {
                        id: id
                    },
                    success: function(suggestions) {
                        // Clear existing suggestions
                        $tagSuggestions.empty();
                        // debugger
                        // Append new suggestions to the list
                        if (suggestions.length > 0) {

                            suggestions.forEach(function(suggestion) {
                                console.log(suggestion.name);
                                $tagSuggestions.append("<option value=" + suggestion
                                    .name + ">" + suggestion.name + "</option>");

                            });
                        }



                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            };

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
        });
    </script>
@endsection
