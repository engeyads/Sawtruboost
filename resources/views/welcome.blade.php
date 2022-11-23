@extends('layouts.app')

@section('content')
<section className='w-full first customYellowbg'>

    <div className='bground'>
        <h2 className="heading">
            MARKETING <br />SOLUTIONS PIONEERS
        </h2>
        <button className='btn'>
            <h1>
                Boost Now !
            </h1>
        </button>
    </div>
    <div className="bird-container bird-container--one">
        <div className="bird bird--one"></div>
    </div>

    <div className="bird-container bird-container--two">
        <div className="bird bird--two"></div>
    </div>

    <div className="bird-container bird-container--three">
        <div className="bird bird--three"></div>
    </div>

    <div className="bird-container bird-container--four">
        <div className="bird bird--four"></div>
    </div>

    {{-- boosts --}}
    <div className="boost-container boost-container--one">
        <div className="boost boost--one"></div>
    </div>

    <div className="boost-container boost-container--two">
        <div className="boost boost--two"></div>
    </div>

    <div className="boost-container boost-container--three">
        <div className="boost boost--three"></div>
    </div>

    <div className="boost-container boost-container--four">
        <div className="boost boost--four"></div>
    </div>
</section>

<section className='w-full second'>
    <div>
        <center>
            <h2 className='socilaword text-xxl font-bold'>With our expert digital marketing services and solutions, get a BOOST and watch as your company reaches its pinnacle of success.</h2>
        </center>
    </div>
</section>

<section className="yellowbg third">
    <section id="panels">

        <div id="panels-container" >
            <article id="panel-1" className="panel full-screen red">
                <div className="container">
                    <div className="row">
                        <div className="col-6">

                            <img src="" alt="" />

                        </div>
                        <div className="col-6 ">

                            <h2 className='text-xxl fontBlont discription text-custom-gray'>OUR MAGICAL BOOSTS</h2>

                            <p className="step-description">
                                INVADE THE DIGITAL WORD WITH SAWTRU BOOST.
                            </p>


                        </div>
                    </div>
                </div>
            </article>
            <article id="panel-2" className="panel full-screen orange">
                <div className="container">
                    <div className="row">
                        <div className="col-6">

                            <img src="" alt="" />

                        </div>
                        <div className="col-6 ">

                            <h2 className='text-xxl fontBlont discription text-custom-gray'>DIGITAL MARKETING</h2>

                            <p className="step-description">
                                Going digital is not just a cliché when you do it with SAWTRU BOOST.
                            </p>


                        </div>
                    </div>
                </div>
            </article>
            <article id="panel-3" className="panel full-screen purple">
                <div className="container">
                    <div className="row">
                        <div className="col-6">

                            <img src="" alt="" />

                        </div>
                        <div className="col-6 ">

                            <h2 className='text-xxl fontBlont discription text-custom-gray'>GROWTH STUDIES</h2>

                            <p className="step-description">
                                Have you ever given your future any thought? Let us work together on this.
                            </p>


                        </div>
                    </div>
                </div>
            </article>
            <article id="panel-4" className="panel full-screen green">
                <div className="container">
                    <div className="row">
                        <div className="col-6">

                            <img src="" alt="" />

                        </div>
                        <div className="col-6 ">

                            <h2 className='text-xxl fontBlont discription text-custom-gray'>CONSULTANCY</h2>

                            <p className="step-description">
                                Getting a second opinion is indeed the wisest course of action in business.
                            </p>


                        </div>
                    </div>
                </div>
            </article>
            <article id="panel-5" className="panel full-screen gray">
                <div className="container">
                    <div className="row">
                        <div className="col-6">

                            <img src="" alt="" />

                        </div>
                        <div className="col-6 ">

                            <h2 className='text-xxl fontBlont discription text-custom-gray'>INNOVATION & CREATIVITY</h2>

                            <p className="step-description">
                                Intelligent, robust, and impactful invention
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</section>

<section className='w-full py-20 fourth'>
    <div>
        <center>
            <table>
                <tr className="py-4">
                    <td><img src={{ asset('assets/logo.svg') }} width="160px" alt="" /></td>
                    <td><img src={{ asset('assets/logo.svg') }} width="160px" alt="" /></td>
                    <td><img src={{ asset('assets/logo.svg') }} width="160px" alt="" /></td>
                    <td><img src={{ asset('assets/logo.svg') }} width="160px" alt="" /></td>
                </tr>

            </table>
        </center>
    </div>
</section>

<section className='w-full yellowbg fifth'>
    <div className="blog-home5 py-5">

        <div className=" justify-content-center">
            <div className="">
                <center>
                    <h3 className="mb-2">LATEST INSIGHTS</h3>
                </center>
                {{--<h6 className="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>--}}
            </div>
        </div>
        <div className="row mt-4">
            <div className="col-md-4">
                <div className="card b-h-box position-relative font-14 border-0 mb-4">
                    <img className="card-img" src={blg1} alt="Card image" />
                    <div className="card-img-overlay overflow-hidden">
                        <div className="d-flex align-items-center">
                            <span className="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Admin</span>
                            <div className="ml-2">
                                <span className="ml-2">Nov 18, 2022</span>
                            </div>
                        </div>
                        <h5 className="card-title my-3 font-weight-normal">Which strategy is better for your company: In-House versus outsourcing</h5>
                        <p className="card-text">Explore the fundamentals of marketing to identify whether you should hire a professional or handle your own marketing: Do it yourself or buy it.</p>
                    </div>
                </div>
            </div>
            <div className="col-md-4">
                <div className="card b-h-box position-relative font-14 border-0 mb-4">
                    <img className="card-img" src={blg2} alt="Card image" />
                    <div className="card-img-overlay overflow-hidden">
                        <div className="d-flex align-items-center">
                            <span className="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Admin</span>
                            <div className="ml-2">
                                <span className="ml-2">Nov 18, 2022</span>
                            </div>
                        </div>
                        <h5 className="card-title my-3 font-weight-normal">Online Consumption: Growing Continually or Just Striking a Plateau?</h5>
                        {{--<p className="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>--}}
                    </div>
                </div>
            </div>
            <div className="col-md-4">
                <div className="card b-h-box position-relative font-14 border-0 mb-4">
                    <img className="card-img" src={blg3} alt="Card image" />
                    <div className="card-img-overlay overflow-hidden">
                        <div className="d-flex align-items-center">
                            <span className="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
                            <div className="ml-2">
                                <span className="ml-2">Feb 18, 2018</span>
                            </div>
                        </div>
                        <h5 className="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
                        <p className="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
