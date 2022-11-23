<div id="mainmenu" className="fixed px-6  z-50 top-0 right-0 mainmenu" /*onScroll={handleScroll}*/>
                <div className="fixed px-6  sm:block">

                    <ApplicationLogo className="block h-16 w-auto Logo" />
                    <div className='subject'></div>

                </div>
                <div className="sm:inline-flex justify-center items-center justify-between justify-items-center">
                    <div className="links text-gray-700 dark:text-gray-500">
                        <ul className='flex text-xl font-bold'>
                            <li><Link href="">Company Profile</Link></li>
                            <li><Link href="">Blog</Link></li>
                            <li>
                                <div className='topmenu2'>
                                    <span>Services</span><span className='triangleBlack'></span>
                                    <div className='submenu2'>
                                        <Link href='/'>Digital</Link>
                                        <Link href='/'>Consultancy</Link>
                                        <Link href='/'>Growth Studies</Link>
                                        <Link href='/'>Creativity</Link>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div className="button_container" id="toggle">
                        <span className="top"></span>
                        <span className="middle"></span>
                        <span className="bottom"></span>
                    </div>
                </div>
                <div className="overlay customYellowbg" id="overlay">
                    <nav className="overlay-menu">
                        <ul>
                            <li><Link href='/about'>About Us</Link></li>
                            <li><div className='topmenu'><span>Services</span><span className='triangleWhite'></span>
                                <div className='submenu '>
                                    <div className="submenuItems flex">
                                        <Link href='/'>Digital</Link>
                                        <Link href='/'>Consultancy</Link>
                                        <Link href='/'>Growth Studies</Link>
                                        <Link href='/'>Creativity</Link>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li><Link href="/">Contact Us</Link></li>
                            <li><Link href="/">People</Link></li>
                            <li className='extramenu'><Link href="/">blog</Link></li>
                            <li className='extramenu'><Link href="/">Company Profile</Link></li>
                        </ul>
                    </nav>
                </div>
            </div>
