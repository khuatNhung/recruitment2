@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-row-tb">
        <div class="pull-left">
            <h2>Create new CV</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cv.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row content-new-cv">
    <div id="content-create-cv" class="col-xs-12 col-sm-7 col-lg-9">
        <form enctype="multipart/form-data" method="POST" role="form" action="{{url('/admin/cv')}}">
            {{ csrf_field() }}
            <!-- section information cv-->
            <section id="informationcv">
                <div class="row">
                    <div class="col-xs-6 col-lg-4">
                        <img id="review" alt="choose my avata" width="150" height="200" />
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="file" name="image" onchange="document.getElementById('review').src = window.URL.createObjectURL(this.files[0])">
                            @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Full name</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="full name">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Day of birth</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" id="birthday" value="{{ old('birthday') }}" name="birthday" class="form-control birthday" placeholder="Day of birth">
                                            @if ($errors->has('birthday'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birthday') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Email</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Phone</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" value="{{ old('phone') }}" id="phone" name="phone" class="form-control" placeholder="Phone">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Address</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" value="{{ old('address') }}" id="address" name="address" class="form-control" placeholder="Address">
                                            @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{ $errors->has('currentaddress') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-4">
                                            <strong>Current address</strong>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-8">
                                            <input type="text" value="{{ old('currentaddress') }}" id="currentaddress" name="currentaddress" class="form-control" placeholder="Current address">
                                            @if ($errors->has('currentaddress'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('currentaddress') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-xs-6 col-lg-4">
                                        <strong>Sex</strong>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-8">
                                        <input type="radio" id="male" value="0" name="sex"> <label class="label-radio" for="male">Male</label>
                                        <input type="radio" id="female" value="1" name="sex"><label  class="label-radio" for="female">FeMale</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section information cv-->
            <hr/>
            <!-- section objective cv-->
            <section id="section_objective">
                <h3>OBJECTIVE</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <textarea id="target" name="target" class="form-control tinymce" placeholder="Objective" rows="6"></textarea>
                    </div>
                </div>
            </section>
            <!-- /section objective cv-->
            <hr/>
            <!-- section education cv-->
            @include('admin.cv.cvpart.education')
            <!-- /section education cv-->
            <hr/>
            <!-- section certification cv-->
            @include('admin.cv.cvpart.certification')
            <!-- /section certification cv-->
            <hr/>
            <!-- section prize cv-->
            @include('admin.cv.cvpart.prize')
            <!-- /section prize cv-->
            <hr/>
            <!-- section skill cv-->
            @include('admin.cv.cvpart.skill')
            <!-- /section skill cv-->
            <hr/>
            <!-- section experience cv-->
            @include('admin.cv.cvpart.experience')
            <!-- /section experience cv-->
            <hr/>
            <!-- section activity cv-->
            @include('admin.cv.cvpart.activity')
            <!-- /section activity cv-->
            <hr/>
            <!-- section hobbies cv-->
            <section id="section_hobbies">
                <h3>HOBBIES AND INTERESTS</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <textarea id="hobbies" name="hobbies" class="form-control tinymce" placeholder="hobbies and interests" rows="6"></textarea>
                    </div>
                </div>
            </section>
            <!-- /section hobbies cv-->
            <hr/>
            <!-- section other cv-->
            <section id="section_other">
                <h3>MORE INFORMATION</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <textarea id="other" name="other" class="form-control tinymce" placeholder="more information" rows="6"></textarea>
                    </div>
                </div>
            </section>
            <!-- /section other cv-->
            <div class="form-group">
                <div class="row btn-register">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <center><button type="submit" class="btn btn-primary">
                        Register
                        </button></center>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="content-assess" class="col-xs-6 col-lg-4">
    </div>
</div>
@stop