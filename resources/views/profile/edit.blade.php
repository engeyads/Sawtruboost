@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'profile',
])

@section('content')
    <div class="content">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('password_status'))
            <div class="alert alert-success" role="alert">
                {{ session('password_status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <div class="avatar-upload1">
                            <div class="avatar-edit">
                                <input type='file' id="bgimageUpload" name='profile' accept=".png, .jpg, .jpeg" />
                                <label for="bgimageUpload"></label>
                            </div>
                            <img src="{{ auth()->user()->userProfile->bgphoto == '' ? asset('profiles/bgphoto/default-bgphoto.jpg') : asset('profiles/bgphoto') . '/' . auth()->user()->userProfile->bgphoto }}"
                                alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name='profile' accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview"
                                        style="background-image: url('{{ __(auth()->user()->userProfile->photo) == '' ? URL::asset('profiles/default-avatar.png') : URL::asset('profiles') . '/' . __(auth()->user()->userProfile->photo) }}');">
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    {{ auth()->user()->userProfile->full_name == '' ? auth()->user()->name : auth()->user()->userProfile->full_name }}
                                </h5>
                            </a>
                            <p class="description">
                                @ {{ __(auth()->user()->name) }}
                            </p>
                        </div>
                        <p class="description text-center">
                            {{ auth()->user()->userProfile->bio }}
                        </p>
                    </div>
                    <div class="card-footer">
                        {{-- <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                    <h5>{{ __('12') }}
                                        <br>
                                        <small>{{ __('Files') }}</small>
                                    </h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                    <h5>{{ __('2GB') }}
                                        <br>
                                        <small>{{ __('Used') }}</small>
                                    </h5>
                                </div>
                                <div class="col-lg-3 mr-auto">
                                    <h5>{{ __('24,6$') }}
                                        <br>
                                        <small>{{ __('Spent') }}</small>
                                    </h5>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Team Members') }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled team-members">
                            @if (auth()->user()->userProfile->teams)
                                @forelse(auth()->user()->userProfile->teams->profile as $member)
                                    @if ($member->uid != auth()->user()->id)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-2">
                                                    <div class="avatar">
                                                        <img src="{{ $member->photo == '' ? URL::asset('profiles/default-avatar.png') : URL::asset('profiles') . '/' . $member->photo }}"
                                                            alt="Circle Image"
                                                            class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-7">
                                                    {{ $member->full_name == '' ? $member->user->name : $member->full_name }}
                                                    <br />
                                                    <span class="text-muted">
                                                        <small>{{ __('Offline') }}</small>
                                                    </span>
                                                </div>
                                                <div class="col-md-3 col-3 text-right">
                                                    <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                                            class="fa fa-envelope"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @empty
                                    <div>no team members !</div>
                                @endforelse
                            @else
                                <div>no team members !</div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <div class="col-md-12">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">{{ __('Edit Profile') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                value="{{ auth()->user()->userProfile->full_name }}">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                        <div class="form-group">
                                            <input type="text" name="namear" class="form-control"
                                                placeholder="الاسم بالعربية"
                                                value="{{ auth()->user()->userProfile->full_namear }}">
                                        </div>
                                        @if ($errors->has('namear'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('namear') }}</strong>
                                            </span>
                                        @endif

                                        <div class="form-group">
                                            <input type="text" name="nametr" class="form-control"
                                                placeholder="Türk Ad Soyad"
                                                value="{{ auth()->user()->userProfile->full_nametr }}">
                                        </div>
                                        @if ($errors->has('nametr'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('nametr') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit"
                                            class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('profile.infoupdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">


                            <div class="card-header">
                                <h5 class="title">{{ __('Other Info') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">{{ __('Career') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="career" class="form-control"
                                                placeholder="Career" value="{{ auth()->user()->userProfile->career }}">
                                        </div>
                                        @if ($errors->has('career'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('career') }}</strong>
                                            </span>
                                        @endif

                                        <div class="form-group">
                                            <input type="text" name="careerar" class="form-control"
                                                placeholder="الوظيفة بالعربية"
                                                value="{{ auth()->user()->userProfile->careerar }}">
                                        </div>
                                        @if ($errors->has('careerar'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('careerar') }}</strong>
                                            </span>
                                        @endif

                                        <div class="form-group">
                                            <input type="text" name="careertr" class="form-control"
                                                placeholder="Türk İş"
                                                value="{{ auth()->user()->userProfile->careertr }}">
                                        </div>
                                        @if ($errors->has('careertr'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('careertr') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">{{ __('Mobile') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select name="country" class="form-control">
                                                <option disabled selected value="default">Country</option>
                                                <option @if (auth()->user()->userProfile->country == '213') selected @endif
                                                    data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option @if (auth()->user()->userProfile->country == '376') selected @endif
                                                    data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option @if (auth()->user()->userProfile->country == '244') selected @endif
                                                    data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option @if (auth()->user()->userProfile->country == '1264') selected @endif
                                                    data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option @if (auth()->user()->userProfile->country == '1268') selected @endif
                                                    data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '54') selected @endif
                                                    data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option @if (auth()->user()->userProfile->country == '374') selected @endif
                                                    data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option @if (auth()->user()->userProfile->country == '297') selected @endif
                                                    data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option @if (auth()->user()->userProfile->country == '61') selected @endif
                                                    data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option @if (auth()->user()->userProfile->country == '43') selected @endif
                                                    data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option @if (auth()->user()->userProfile->country == '994') selected @endif
                                                    data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option @if (auth()->user()->userProfile->country == '1242') selected @endif
                                                    data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option @if (auth()->user()->userProfile->country == '973') selected @endif
                                                    data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option @if (auth()->user()->userProfile->country == '880') selected @endif
                                                    data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option @if (auth()->user()->userProfile->country == '1246') selected @endif
                                                    data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option @if (auth()->user()->userProfile->country == '375') selected @endif
                                                    data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option @if (auth()->user()->userProfile->country == '32') selected @endif
                                                    data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option @if (auth()->user()->userProfile->country == '501') selected @endif
                                                    data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option @if (auth()->user()->userProfile->country == '229') selected @endif
                                                    data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option @if (auth()->user()->userProfile->country == '1441') selected @endif
                                                    data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option @if (auth()->user()->userProfile->country == '975') selected @endif
                                                    data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option @if (auth()->user()->userProfile->country == '591') selected @endif
                                                    data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option @if (auth()->user()->userProfile->country == '387') selected @endif
                                                    data-countryCode="BA" value="387">Bosnia Herzegovina (+387)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '267') selected @endif
                                                    data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option @if (auth()->user()->userProfile->country == '55') selected @endif
                                                    data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option @if (auth()->user()->userProfile->country == '673') selected @endif
                                                    data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option @if (auth()->user()->userProfile->country == '359') selected @endif
                                                    data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option @if (auth()->user()->userProfile->country == '226') selected @endif
                                                    data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option @if (auth()->user()->userProfile->country == '257') selected @endif
                                                    data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option @if (auth()->user()->userProfile->country == '855') selected @endif
                                                    data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option @if (auth()->user()->userProfile->country == '237') selected @endif
                                                    data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option @if (auth()->user()->userProfile->country == '1') selected @endif
                                                    data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option @if (auth()->user()->userProfile->country == '238') selected @endif
                                                    data-countryCode="CV" value="238">Cape Verde Islands (+238)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '1345') selected @endif
                                                    data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option @if (auth()->user()->userProfile->country == '236') selected @endif
                                                    data-countryCode="CF" value="236">Central African Republic (+236)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '56') selected @endif
                                                    data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option @if (auth()->user()->userProfile->country == '86') selected @endif
                                                    data-countryCode="CN" value="86">China (+86)</option>
                                                <option @if (auth()->user()->userProfile->country == '57') selected @endif
                                                    data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option @if (auth()->user()->userProfile->country == '269') selected @endif
                                                    data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option @if (auth()->user()->userProfile->country == '242') selected @endif
                                                    data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option @if (auth()->user()->userProfile->country == '682') selected @endif
                                                    data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option @if (auth()->user()->userProfile->country == '506') selected @endif
                                                    data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option @if (auth()->user()->userProfile->country == '385') selected @endif
                                                    data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option @if (auth()->user()->userProfile->country == '53') selected @endif
                                                    data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option @if (auth()->user()->userProfile->country == '90392') selected @endif
                                                    data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option @if (auth()->user()->userProfile->country == '357') selected @endif
                                                    data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                <option @if (auth()->user()->userProfile->country == '42') selected @endif
                                                    data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option @if (auth()->user()->userProfile->country == '45') selected @endif
                                                    data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option @if (auth()->user()->userProfile->country == '253') selected @endif
                                                    data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option @if (auth()->user()->userProfile->country == '1809') selected @endif
                                                    data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option @if (auth()->user()->userProfile->country == '1809') selected @endif
                                                    data-countryCode="DO" value="1809">Dominican Republic (+1809)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '593') selected @endif
                                                    data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option @if (auth()->user()->userProfile->country == '20') selected @endif
                                                    data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option @if (auth()->user()->userProfile->country == '503') selected @endif
                                                    data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option @if (auth()->user()->userProfile->country == '240') selected @endif
                                                    data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option @if (auth()->user()->userProfile->country == '291') selected @endif
                                                    data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option @if (auth()->user()->userProfile->country == '372') selected @endif
                                                    data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option @if (auth()->user()->userProfile->country == '251') selected @endif
                                                    data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option @if (auth()->user()->userProfile->country == '500') selected @endif
                                                    data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option @if (auth()->user()->userProfile->country == '298') selected @endif
                                                    data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option @if (auth()->user()->userProfile->country == '679') selected @endif
                                                    data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option @if (auth()->user()->userProfile->country == '358') selected @endif
                                                    data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option @if (auth()->user()->userProfile->country == '33') selected @endif
                                                    data-countryCode="FR" value="33">France (+33)</option>
                                                <option @if (auth()->user()->userProfile->country == '594') selected @endif
                                                    data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option @if (auth()->user()->userProfile->country == '689') selected @endif
                                                    data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option @if (auth()->user()->userProfile->country == '241') selected @endif
                                                    data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option @if (auth()->user()->userProfile->country == '220') selected @endif
                                                    data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option @if (auth()->user()->userProfile->country == '7880') selected @endif
                                                    data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option @if (auth()->user()->userProfile->country == '49') selected @endif
                                                    data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option @if (auth()->user()->userProfile->country == '233') selected @endif
                                                    data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option @if (auth()->user()->userProfile->country == '350') selected @endif
                                                    data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option @if (auth()->user()->userProfile->country == '30') selected @endif
                                                    data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option @if (auth()->user()->userProfile->country == '299') selected @endif
                                                    data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option @if (auth()->user()->userProfile->country == '1473') selected @endif
                                                    data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option @if (auth()->user()->userProfile->country == '590') selected @endif
                                                    data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option @if (auth()->user()->userProfile->country == '671') selected @endif
                                                    data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option @if (auth()->user()->userProfile->country == '502') selected @endif
                                                    data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option @if (auth()->user()->userProfile->country == '224') selected @endif
                                                    data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option @if (auth()->user()->userProfile->country == '245') selected @endif
                                                    data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option @if (auth()->user()->userProfile->country == '592') selected @endif
                                                    data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option @if (auth()->user()->userProfile->country == '509') selected @endif
                                                    data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option @if (auth()->user()->userProfile->country == '504') selected @endif
                                                    data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option @if (auth()->user()->userProfile->country == '852') selected @endif
                                                    data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option @if (auth()->user()->userProfile->country == '36') selected @endif
                                                    data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option @if (auth()->user()->userProfile->country == '354') selected @endif
                                                    data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option @if (auth()->user()->userProfile->country == '91') selected @endif
                                                    data-countryCode="IN" value="91">India (+91)</option>
                                                <option @if (auth()->user()->userProfile->country == '62') selected @endif
                                                    data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option @if (auth()->user()->userProfile->country == '98') selected @endif
                                                    data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option @if (auth()->user()->userProfile->country == '964') selected @endif
                                                    data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option @if (auth()->user()->userProfile->country == '353') selected @endif
                                                    data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option @if (auth()->user()->userProfile->country == '972') selected @endif
                                                    data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option @if (auth()->user()->userProfile->country == '39') selected @endif
                                                    data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option @if (auth()->user()->userProfile->country == '1876') selected @endif
                                                    data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option @if (auth()->user()->userProfile->country == '81') selected @endif
                                                    data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option @if (auth()->user()->userProfile->country == '962') selected @endif
                                                    data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option @if (auth()->user()->userProfile->country == '7') selected @endif
                                                    data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option @if (auth()->user()->userProfile->country == '254') selected @endif
                                                    data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option @if (auth()->user()->userProfile->country == '686') selected @endif
                                                    data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option @if (auth()->user()->userProfile->country == '850') selected @endif
                                                    data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option @if (auth()->user()->userProfile->country == '82') selected @endif
                                                    data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option @if (auth()->user()->userProfile->country == '965') selected @endif
                                                    data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option @if (auth()->user()->userProfile->country == '996') selected @endif
                                                    data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option @if (auth()->user()->userProfile->country == '856') selected @endif
                                                    data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option @if (auth()->user()->userProfile->country == '371') selected @endif
                                                    data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option @if (auth()->user()->userProfile->country == '961') selected @endif
                                                    data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option @if (auth()->user()->userProfile->country == '266') selected @endif
                                                    data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option @if (auth()->user()->userProfile->country == '231') selected @endif
                                                    data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option @if (auth()->user()->userProfile->country == '218') selected @endif
                                                    data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option @if (auth()->user()->userProfile->country == '417') selected @endif
                                                    data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option @if (auth()->user()->userProfile->country == '370') selected @endif
                                                    data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option @if (auth()->user()->userProfile->country == '352') selected @endif
                                                    data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option @if (auth()->user()->userProfile->country == '853') selected @endif
                                                    data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option @if (auth()->user()->userProfile->country == '389') selected @endif
                                                    data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option @if (auth()->user()->userProfile->country == '261') selected @endif
                                                    data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option @if (auth()->user()->userProfile->country == '265') selected @endif
                                                    data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option @if (auth()->user()->userProfile->country == '60') selected @endif
                                                    data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option @if (auth()->user()->userProfile->country == '960') selected @endif
                                                    data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option @if (auth()->user()->userProfile->country == '223') selected @endif
                                                    data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option @if (auth()->user()->userProfile->country == '356') selected @endif
                                                    data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option @if (auth()->user()->userProfile->country == '692') selected @endif
                                                    data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option @if (auth()->user()->userProfile->country == '596') selected @endif
                                                    data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option @if (auth()->user()->userProfile->country == '222') selected @endif
                                                    data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option @if (auth()->user()->userProfile->country == '269') selected @endif
                                                    data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option @if (auth()->user()->userProfile->country == '52') selected @endif
                                                    data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option @if (auth()->user()->userProfile->country == '691') selected @endif
                                                    data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option @if (auth()->user()->userProfile->country == '373') selected @endif
                                                    data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option @if (auth()->user()->userProfile->country == '377') selected @endif
                                                    data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option @if (auth()->user()->userProfile->country == '976') selected @endif
                                                    data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option @if (auth()->user()->userProfile->country == '1664') selected @endif
                                                    data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option @if (auth()->user()->userProfile->country == '212') selected @endif
                                                    data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option @if (auth()->user()->userProfile->country == '258') selected @endif
                                                    data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option @if (auth()->user()->userProfile->country == '95') selected @endif
                                                    data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                <option @if (auth()->user()->userProfile->country == '264') selected @endif
                                                    data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option @if (auth()->user()->userProfile->country == '674') selected @endif
                                                    data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option @if (auth()->user()->userProfile->country == '977') selected @endif
                                                    data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option @if (auth()->user()->userProfile->country == '31') selected @endif
                                                    data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option @if (auth()->user()->userProfile->country == '687') selected @endif
                                                    data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option @if (auth()->user()->userProfile->country == '64') selected @endif
                                                    data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option @if (auth()->user()->userProfile->country == '505') selected @endif
                                                    data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option @if (auth()->user()->userProfile->country == '227') selected @endif
                                                    data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option @if (auth()->user()->userProfile->country == '234') selected @endif
                                                    data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option @if (auth()->user()->userProfile->country == '683') selected @endif
                                                    data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option @if (auth()->user()->userProfile->country == '672') selected @endif
                                                    data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option @if (auth()->user()->userProfile->country == '670') selected @endif
                                                    data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                <option @if (auth()->user()->userProfile->country == '47') selected @endif
                                                    data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option @if (auth()->user()->userProfile->country == '968') selected @endif
                                                    data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option @if (auth()->user()->userProfile->country == '680') selected @endif
                                                    data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option @if (auth()->user()->userProfile->country == '970') selected @endif
                                                    data-countryCode="PS" value="970">Palestine (+970)</option>
                                                <option @if (auth()->user()->userProfile->country == '507') selected @endif
                                                    data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option @if (auth()->user()->userProfile->country == '675') selected @endif
                                                    data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option @if (auth()->user()->userProfile->country == '595') selected @endif
                                                    data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option @if (auth()->user()->userProfile->country == '51') selected @endif
                                                    data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option @if (auth()->user()->userProfile->country == '63') selected @endif
                                                    data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option @if (auth()->user()->userProfile->country == '48') selected @endif
                                                    data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option @if (auth()->user()->userProfile->country == '351') selected @endif
                                                    data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option @if (auth()->user()->userProfile->country == '1787') selected @endif
                                                    data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option @if (auth()->user()->userProfile->country == '974') selected @endif
                                                    data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option @if (auth()->user()->userProfile->country == '262') selected @endif
                                                    data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option @if (auth()->user()->userProfile->country == '40') selected @endif
                                                    data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option @if (auth()->user()->userProfile->country == '7') selected @endif
                                                    data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option @if (auth()->user()->userProfile->country == '250') selected @endif
                                                    data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option @if (auth()->user()->userProfile->country == '378') selected @endif
                                                    data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option @if (auth()->user()->userProfile->country == '239') selected @endif
                                                    data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '966') selected @endif
                                                    data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option @if (auth()->user()->userProfile->country == '221') selected @endif
                                                    data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option @if (auth()->user()->userProfile->country == '381') selected @endif
                                                    data-countryCode="CS" value="381">Serbia (+381)</option>
                                                <option @if (auth()->user()->userProfile->country == '248') selected @endif
                                                    data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option @if (auth()->user()->userProfile->country == '232') selected @endif
                                                    data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option @if (auth()->user()->userProfile->country == '65') selected @endif
                                                    data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option @if (auth()->user()->userProfile->country == '421') selected @endif
                                                    data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option @if (auth()->user()->userProfile->country == '386') selected @endif
                                                    data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option @if (auth()->user()->userProfile->country == '677') selected @endif
                                                    data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option @if (auth()->user()->userProfile->country == '252') selected @endif
                                                    data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option @if (auth()->user()->userProfile->country == '27') selected @endif
                                                    data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option @if (auth()->user()->userProfile->country == '34') selected @endif
                                                    data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option @if (auth()->user()->userProfile->country == '94') selected @endif
                                                    data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option @if (auth()->user()->userProfile->country == '290') selected @endif
                                                    data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option @if (auth()->user()->userProfile->country == '1869') selected @endif
                                                    data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option @if (auth()->user()->userProfile->country == '1758') selected @endif
                                                    data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                <option @if (auth()->user()->userProfile->country == '249') selected @endif
                                                    data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option @if (auth()->user()->userProfile->country == '597') selected @endif
                                                    data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option @if (auth()->user()->userProfile->country == '268') selected @endif
                                                    data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option @if (auth()->user()->userProfile->country == '46') selected @endif
                                                    data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option @if (auth()->user()->userProfile->country == '41') selected @endif
                                                    data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option @if (auth()->user()->userProfile->country == '963') selected @endif
                                                    data-countryCode="SI" value="963">Syria (+963)</option>
                                                <option @if (auth()->user()->userProfile->country == '886') selected @endif
                                                    data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option @if (auth()->user()->userProfile->country == '7') selected @endif
                                                    data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option @if (auth()->user()->userProfile->country == '66') selected @endif
                                                    data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option @if (auth()->user()->userProfile->country == '228') selected @endif
                                                    data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option @if (auth()->user()->userProfile->country == '676') selected @endif
                                                    data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option @if (auth()->user()->userProfile->country == '1868') selected @endif
                                                    data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '216') selected @endif
                                                    data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option @if (auth()->user()->userProfile->country == '90') selected @endif
                                                    data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option @if (auth()->user()->userProfile->country == '7') selected @endif
                                                    data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option @if (auth()->user()->userProfile->country == '993') selected @endif
                                                    data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                <option @if (auth()->user()->userProfile->country == '1649') selected @endif
                                                    data-countryCode="TC" value="1649">Turks &amp; Caicos Islands
                                                    (+1649)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '688') selected @endif
                                                    data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option @if (auth()->user()->userProfile->country == '256') selected @endif
                                                    data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                <option @if (auth()->user()->userProfile->country == '380') selected @endif
                                                    data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option @if (auth()->user()->userProfile->country == '971') selected @endif
                                                    data-countryCode="AE" value="971">United Arab Emirates (+971)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '598') selected @endif
                                                    data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                <option @if (auth()->user()->userProfile->country == '7') selected @endif
                                                    data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option @if (auth()->user()->userProfile->country == '678') selected @endif
                                                    data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option @if (auth()->user()->userProfile->country == '379') selected @endif
                                                    data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option @if (auth()->user()->userProfile->country == '58') selected @endif
                                                    data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option @if (auth()->user()->userProfile->country == '84') selected @endif
                                                    data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option @if (auth()->user()->userProfile->country == '84') selected @endif
                                                    data-countryCode="VG" value="84">Virgin Islands - British (+1284)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '84') selected @endif
                                                    data-countryCode="VI" value="84">Virgin Islands - US (+1340)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '681') selected @endif
                                                    data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)
                                                </option>
                                                <option @if (auth()->user()->userProfile->country == '969') selected @endif
                                                    data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option @if (auth()->user()->userProfile->country == '967') selected @endif
                                                    data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                <option @if (auth()->user()->userProfile->country == '260') selected @endif
                                                    data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option @if (auth()->user()->userProfile->country == '263') selected @endif
                                                    data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif

                                        <div class="form-group">
                                            <input type="tel" name="mobile" class="form-control"
                                                placeholder="Mobile" value="{{ auth()->user()->userProfile->mobile }}">
                                        </div>
                                        @if ($errors->has('mobile'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit"
                                            class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <form  action="{{ route('profile.password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5 class="title">{{ __('Change Password') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Old Password') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="old_password" class="form-control"
                                            placeholder="Old password" required>
                                    </div>
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('New Password') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                            required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Password Confirmation') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="Password Confirmation" required>
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $('#imageUpload').on('change', function() {
                if ($(this).val() != '') {

                    let fd = new FormData();
                    fd.append('profile', $(this).get(0).files[0]);

                    console.log(fd.values());
                    $.ajax({
                        url: "{{ route('profile.photo') }}",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        dataType: 'json',
                        success: (response) => {
                            if (response) {
                                this.reset();
                                alert('File has been uploaded successfully');
                            }
                        },
                        error: function(response) {
                            console.log(response.responseJSON.message);
                        }
                    });
                }
            });


            $('#bgimageUpload').on('change', function() {
                if ($(this).val() != '') {

                    let fd = new FormData();
                    fd.append('bgphoto', $(this).get(0).files[0]);

                    console.log(fd.values());
                    $.ajax({
                        url: "{{ route('profile.bgphoto') }}",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        dataType: 'json',
                        success: (response) => {
                            if (response) {
                                this.reset();
                                alert('File has been uploaded successfully');
                            }
                        },
                        error: function(response) {
                            console.log(response.responseJSON.message);
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
