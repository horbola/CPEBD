@extends('layout.app')

@section('title', 'Capital Power Engineering (Bd)')
@section('content')
<div align="center" id="dvImage" style="height: 300px; width: 1000px;"></div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    var images = ["1.jpg", "2.jpg", "1.jpg", "4.jpg", "5.jpg", "6.jpg"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(./style/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url(./style/" + images[i] + ")");
                $(this).fadeIn("slow");
            });
        }, 3000);
    });
</script>

<div id="site_content">
    <div class="sidebar" >
        <!-- insert your sidebar items here -->
        <h3 id="Content_Sed">Latest News</h3>
        <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();" >			
            <ul>
                <li> 500KVA Substation at ABEDA MEMORIAL HOSPITAL (PVT.) LTD..</li>
                <li>250KVA Substatio, 50KVA Generator, & 8 Person 10Stage Lift at Swapno Nagar Developer Ltd.</li>
                <li>315KVA Substatio at Holly Cross Vadun Pubail gazipur. </li>
            </ul>
        </marquee>
        <h3 id="Content_Sed">Email</h3>
        <ul>
            <li><a href='https://capitalpowerbd.com:2096' target="_blank">Email Login</a></li>
        </ul>
    </div>
    <div id="content">
        <!-- insert the page content here -->
        <h2 class="HighlightTextTop" >"Managing Director's Speech"</h2>
        <p >Capital Power Engineering (Bd) is one of the most trust-worthy manufacturer &
            supplier of power solution product in bangladesh and working in industrial,
            commercial, residential sector successfull-y. Capital Power offer customers compiete
            substation and transformer is one its key item on which the company has achieved a
            mile-stone on quality. The company has already achieved the trust of tne customers for
            their instantaneous service, eff iciency, innovation and superior quality of their products.
            The factory is one of the Iargest independent manufacturing unit for manufacturing of
            high-quality, custom solutions for power systems for big or small industrial units,
            commercial complexes and residential. Transformers are designed according to
            international standards and on requirements of valued customers comprising the
            recognized standards of IEC - 76, BS- l7l, ANSI C57)2, VDE 0537.</p>
        <h4 class="HighlightTextTop" >"Mission"</h4>
        <p >To be top in the power sector of the country by providing enhanced services,
            relationship, prof itability & ensure customer delight.</p>
        <h4 class="HighlightTextTop" >"Vission"</h4>
        <p >To provide quality power products and round the clock services to the clients in a very
            competitive price.</p>
        <h4>-Capital Power Engineering BD.</h4>
    </div>
</div>



<div id="site_content1">
    <div class="col1">
        <div class="a">
            <h2 align="center" class="HeadingHighliter">Electrical Substation</h2>
            <span class="imgcenter"><img style="height: 220px; width: 220px;" src="https://capitalpowerbd.com/capitalpowerbd/Electrical-Substation.jpg" alt="Electrical Substatio" /></span>
            <p style="text-align:justify">A substation is a part of an electrical generation, transmission, and distribution system. Substations transform voltage from high to low, or the reverse, or perform any of several other important functions. Between the generating station and consumer, electric power may flow through several substations at different voltage levels. A substation may include transformers to change voltage levels between high transmission voltages and lower distribution voltages, or at the interconnection of two different transmission voltages.</p><h4>Read More</h4>
        </div>
    </div>	

    <div class="col1">
        <div class="b">
            <h2 align="center" class="HeadingHighliter">Generator</h2>
            <span class="imgcenter"><img style="height: 220px; width: 220px;" src="https://capitalpowerbd.com/capitalpowerbd/Generator%20capitalpower.jpg" alt="Generator" /></span>

            <p style="text-align:justify">In electricity generation, a generator is a device that converts motive power (mechanical energy) into electrical power for use in an external circuit. Sources of mechanical energy include steam turbines, gas turbines, water turbines, internal combustion engines, wind turbines and even hand cranks. The first electromagnetic generator, the Faraday disk, was invented in 1831 by British scientist Michael Faraday. Generators provide nearly all of the power for electric power grids.</p><h4>Read More</h4>
        </div>
    </div>	

    <div class="col1">
        <div class="c">
            <h2 align="center" class="HeadingHighliter">Elevetor</h2>
            <span class="imgcenter"><img style="height: 220px; width: 220px;" src="https://capitalpowerbd.com/capitalpowerbd/Elevetor-capitalpower.jpg" alt="Elevetor" /></span>
            <p style="text-align:justify">An elevator or lift is a type of cable-assisted, hydraulic cylinder-assisted, or roller-track assisted machine that vertically transports people or freight between floors, levels, or decks of a building, vessel, or other structure. They are typically powered by electric motors that drive traction cables and counterweight systems such as a hoist, although some pump hydraulic fluid to raise a cylindrical piston like a jack.</p><h4>Read More</h4>
        </div>
    </div>

    <div class="col1">
        <div class="d">
            <h2 align="center" class="HeadingHighliter">Solar System</h2>
            <span class="imgcenter"><img style="height: 220px; width: 220px;" src="https://capitalpowerbd.com/capitalpowerbd/Solar%20System.jpg" alt="Solar System" /></span>
            <p style="text-align:justify">Solar power is the conversion of renewable energy from sunlight into electricity, either directly using photovoltaics (PV), indirectly using concentrated solar power, or a combination. Concentrated solar power systems use lenses or mirrors and solar tracking systems to focus a large area of sunlight into a small beam. Photovoltaic cells convert light into an electric current using the photovoltaic effect.</p><h4>Read More</h4>
        </div>		
    </div>
</div>
@endsection