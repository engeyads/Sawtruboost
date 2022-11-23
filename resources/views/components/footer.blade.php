<footer className='w-full pt-16 px-16 pb-2  '>

    <div className='w-full '>

        <div className='footerTitle'>
            <h2 className='text-xxl font-bold'>Ready To Boost Now?</h2>
            <p>Explore your growth opportunities by contacting one of our ofces whichever way you prefer.</p>

        </div>
        <section>
            <div id="grid1" className="grid1">
                <div className="grid__item text-center">
                    <h4 className='text-l font-bold'>
                        Contact
                    </h4>
                    <ul className='align-items-center'>
                        <li>
                            <Link>Careers</Link>
                        </li>
                        <li>
                            <Link>Partners</Link>
                        </li>
                        <li>
                            <Link>Contact us</Link>
                        </li>
                    </ul>
                </div>
                <div className="grid__item text-center">
                    <h4 className='text-l font-bold'>
                        Condetions
                    </h4>
                    <ul>
                        <li>
                            <Link>Terms</Link>
                        </li>
                        <li>
                            <Link>Privacy</Link>
                        </li>
                        <li>
                            <Link>Cookies</Link>
                        </li>
                    </ul>
                </div>
                <div className="grid__item">
                    <center>
                    <table>
                        <tbody >
                            <tr >
                                <td className='text-right'>
                                    Belgium:
                                </td>
                                <td className='text-left'>
                                    <Link>+32 537 913 04 51</Link>
                                </td>
                            </tr>

                            <tr >
                                <td className='text-right'>
                                    Saudi Arabia:
                                </td>
                                <td className='text-left'>
                                    <Link>+966 537 913 04 51</Link>
                                </td>
                            </tr>
                            <tr >
                                <td className='text-right'>
                                    UAE:
                                </td>
                                <td className='text-left'>
                                    <Link>+971 537 913 04 51</Link>
                                </td>
                            </tr>
                            <tr >
                                <td className='text-right'>
                                    Turkiye:
                                </td>
                                <td className='text-left'>
                                    <Link>+90 537 913 04 51</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </center>
                </div>
            </div>

        </section>

        <div className='copyright'>
            <div className='languages'>

                <table className="py-4 inline-flex align-right">
                    <tbody>
                        <tr>

                            <td ><Link><img className='inline-flex' width='22px' src={en} alt="" /> En</Link></td>
                            <td ><Link><img className='inline-flex' width='22px' src={ar} alt="" /> Ar</Link></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div className=" px-6 py-4 sm:block footerLogo">
                <Link href="/">
                    <img src={logos} width="200" alt="" />
                </Link>
            </div>
            <div className='rights'>
                <center>
                    <p>SAWTRU BOOST ® 2022 All Rights Reserved</p>
                </center>
            </div>
        </div>
    </div>

</footer>
