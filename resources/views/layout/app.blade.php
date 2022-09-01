<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="Capital Power Engineering BD." />
        <meta name="keywords" content="Capital Power Engineering BD., Engineering, Substation, Electrical Substation" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="style.css" title="style" />
        <link rel="shortcut icon" href="images/Company logo.png" />
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h3 align="right" style="color:#1C2C3E;">Hot Line : +88-01713930394</h3>		  

                    <div id="logo_text">
                        <!-- class="logo-colour", allows you to change the colour of the text -->
                        <h1><img src="images/Capital-Power-Engineering-BD.png" alt="Capital Power Engineering BD." border="0" height="120" width="125"/></h1>		  
                    </div>


                    <div  id="marquee" class="marquee" ></div>
                    <div  id="LogoName" ><img style="" src="./images/footer-logo.png" alt=".Capital Power Engineering BD." border="0" height="60" width="275"/></div>


                </div>

                <div id="menubar">
                    <ul id="menu">
                        <ul class="drop_menu">
                            <li><a href='/'>Home</a></li>
                            <li><a href='/transformer-accessories'>Transformer Accessories</a></li>
                            <li><a href='#'>Services</a>
                                <ul>
                                    <li><a href='Oil-centrifuge'>Oil Centrifuge</a></li>
                                    <li><a href='Oil-test'>Oil Test</a></li>
                                    <li><a href='transformer'>Transformer</a></li>
                                    <li><a href='Medium-Low-Voltage-Substation'>Medium / Low Voltage Substation</a></li>
                                    <li><a href='High-Voltage-Substation-Solution'>High Voltage Substation Solution</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Electrical Substation</a>
                                <ul>
                                    <li><a href='transformer'>Transformer</a></li>
                                    <li><a href='HTSwitchgear'>H.T Switchgear</a></li>
                                    <li><a href='LTSwitchgear'>L.T Switchgear</a></li>
                                    <li><a href='PFIPLant'>P.F.I Plant</a></li>
                                    <li><a href='distribution-board'>Distribution Board</a></li>
                                    <li><a href='motor-control'>Motor control Panel</a></li>
                                    <li><a href='energy'>Energy Meter</a></li>
                                    <li><a href='voltage-regulator'>Auto Voltage Regulator</a></li>
                                    <li><a href='electrical-spareparts'>Spare Parts</a></li>
                                </ul>
                            </li>
                            <li><a href='generator'>Generator</a>
                            </li>
                            <li><a href='elevator'>Elevator</a>
                            </li>
                            <li><a href='solar'>Solar System</a>
                            </li>								
                        </ul>

                    </ul>
                </div>
            </div> <!-- header ends -->

            @yield('content')
            
            <!-- footer starts -->
            <div id="site_content">
                <div id="content" class="HighlightTextTop">Our Used Brand
                    <span class="imgcenter"><img src="https://capitalpowerbd.com/images/Brandslogo.jpg" alt="example graphic" /></span>
                </div>
            </div>

            <div id="footer">
                <p> Capital Power Engineering BD, HPlot: 71, Bamnertek, Main Road, Block: E, Nishatnagar, Turag, Dhaka - 1230. </br> Email: capitalpowerbd@gmail.com / info@capitalpowerbd.com, Mobile : +88 01713930394</p>
                <p>&copy; Capital Power Engineering BD.</p>
            </div> <!-- footer ends -->
        </div>
    </body>
</html>
