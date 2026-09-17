<?php
// TanzaniaTrip — PHP/MySQL-ready tourism planner.
// Bootstrap handles the responsive UI and jQuery handles client-side interactions.
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="TanzaniaTrip — plan hotels, attractions, transport and Tanzania itineraries.">
<title>TanzaniaTrip | Tanzania Hotels & Tourism Planner</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
:root{--tz-green:#075b3d;--tz-dark:#06251b;--tz-gold:#d6a43a;--tz-cream:#f6f3e9}
body{background:var(--tz-cream);color:#10231c;font-family:Arial,Helvetica,sans-serif}
.navbar,.footer{background:var(--tz-dark)}
.brand{font-weight:800;letter-spacing:.2px}.hero{background:linear-gradient(135deg,#063d2a,#0a6845);color:#fff;padding:78px 0 105px}.hero h1{font-size:clamp(2.5rem,6vw,5rem);font-weight:800;max-width:900px}.hero p{max-width:760px;font-size:1.15rem;color:#dceee6}.planner{margin-top:-65px;border:0;border-radius:22px;box-shadow:0 18px 55px rgba(4,35,25,.16)}.section-title{font-weight:800}.day-card,.feature-card,.cost-card{border:0;border-radius:18px;box-shadow:0 8px 28px rgba(4,35,25,.07)}.day-number{background:var(--tz-green);color:#fff;border-radius:50%;width:44px;height:44px;display:inline-flex;align-items:center;justify-content:center;font-weight:800}.btn-tz{background:var(--tz-green);color:#fff;border:0}.btn-tz:hover{background:#06472f;color:#fff}.badge-tz{background:#e8f3ed;color:var(--tz-green)}.total-card{background:var(--tz-dark);color:#fff}.small-note{color:#68766f;font-size:.88rem}.chip{cursor:pointer}.feature-icon{font-size:2rem;color:var(--tz-green)}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark py-3">
<div class="container"><a class="navbar-brand brand" href="#">🇹🇿 TanzaniaTrip</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="nav"><ul class="navbar-nav ms-auto gap-lg-2"><li class="nav-item"><a class="nav-link" href="#planner">Plan Trip</a></li><li class="nav-item"><a class="nav-link" href="#features">Hotels & Attractions</a></li><li class="nav-item"><a class="nav-link" href="#itinerary">Itinerary</a></li></ul></div></div>
</nav>
<header class="hero"><div class="container"><span class="badge rounded-pill text-bg-light mb-3">Tanzania tourism platform</span><h1>Build your Tanzania trip in minutes.</h1><p class="mt-3">Plan accommodation, attractions, transport and activities in one place. Start with an itinerary today, then grow into hotel reservations, maps, room management and live hotel services.</p></div></header>
<main class="container pb-5">
<section id="planner" class="card planner p-4 p-lg-5">
<div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-2 mb-4"><div><h2 class="section-title mb-1">Trip planner</h2><div class="small-note">Create a practical Tanzania itinerary and planning estimate.</div></div><span class="badge badge-tz rounded-pill px-3 py-2">Bootstrap + jQuery</span></div>
<div class="row g-3">
<div class="col-md-6 col-lg-3"><label class="form-label fw-bold">Days</label><input id="days" class="form-control form-control-lg" type="number" min="1" max="21" value="5"></div>
<div class="col-md-6 col-lg-3"><label class="form-label fw-bold">Travellers</label><input id="people" class="form-control form-control-lg" type="number" min="1" max="30" value="2"></div>
<div class="col-md-6 col-lg-3"><label class="form-label fw-bold">Travel style</label><select id="style" class="form-select form-select-lg"><option value="budget">Budget</option><option value="standard" selected>Standard</option><option value="comfort">Comfort</option></select></div>
<div class="col-md-6 col-lg-3"><label class="form-label fw-bold">Starting area</label><select id="start" class="form-select form-select-lg"><option>Dodoma</option><option>Dar es Salaam</option><option>Arusha</option><option>Mwanza</option><option>Zanzibar</option><option>Mbeya</option></select></div>
</div>
<div class="mt-4"><label class="form-label fw-bold">What do you want to experience?</label><div class="d-flex flex-wrap gap-2">
<label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="Wildlife" checked> 🦁 Wildlife</label><label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="Culture" checked> 🪘 Culture</label><label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="City"> 🏙️ City</label><label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="Nature"> 🌿 Nature</label><label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="Beach"> 🏖️ Beach</label><label class="btn btn-outline-success chip"><input class="interest d-none" type="checkbox" value="Food"> 🍛 Food</label>
</div></div>
<button id="generate" class="btn btn-tz btn-lg mt-4 px-4">Generate my Tanzania trip →</button>
</section>
<section id="features" class="py-5"><div class="row g-4"><div class="col-md-4"><div class="card feature-card h-100 p-4"><div class="feature-icon">🏨</div><h3 class="h5 fw-bold mt-3">Hotels & rooms</h3><p class="mb-0 text-secondary">Ready for the next phase: hotel listings, room inventory and reservation/PMS integration.</p></div></div><div class="col-md-4"><div class="card feature-card h-100 p-4"><div class="feature-icon">🗺️</div><h3 class="h5 fw-bold mt-3">Maps & transport</h3><p class="mb-0 text-secondary">Designed to connect attractions, hotels, bus stands and transfer routes through Google Maps or Mapbox.</p></div></div><div class="col-md-4"><div class="card feature-card h-100 p-4"><div class="feature-icon">📶</div><h3 class="h5 fw-bold mt-3">Hotel operations</h3><p class="mb-0 text-secondary">The platform can later expose Wi‑Fi status and automated door/device status for participating hotels.</p></div></div></div></section>
<section id="itinerary"><h2 class="section-title mb-3">Your itinerary</h2><div id="itinerary-list" class="row g-3"></div></section>
<section class="py-5"><h2 class="section-title mb-3">Estimated trip cost</h2><div id="costs" class="row g-3"></div><p class="small-note mt-3">These are planning estimates, not live hotel, transport or attraction quotations. Actual prices vary by location, season, provider and booking date.</p></section>
</main>
<footer class="footer text-light py-4"><div class="container text-center"><strong>TanzaniaTrip</strong><div class="small mt-1 text-white-50">Tanzania hotels • attractions • transport • itinerary planning</div></div></footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const places={Wildlife:['National park safari','Wildlife viewing and guided game drive'],Culture:['Local cultural experience','Visit a community, heritage site or craft market'],City:['City exploration','Markets, landmarks and a guided city walk'],Nature:['Nature adventure','Waterfall, viewpoint, forest or scenic landscape'],Beach:['Beach day','Coastal relaxation and water activities'],Food:['Tanzanian food experience','Local restaurant and street-food tasting']};
function money(n){return new Intl.NumberFormat('en-TZ').format(Math.round(n))+' TZS'}
function generate(){
 const days=Math.max(1,Math.min(21,parseInt($('#days').val(),10)||5)),people=Math.max(1,parseInt($('#people').val(),10)||2),start=$('#start').val(),style=$('#style').val();
 let interests=$('.interest:checked').map(function(){return this.value}).get();if(!interests.length)interests=['Culture','Nature'];
 let html='';
 for(let i=1;i<=days;i++){let title,desc;if(i===1){title='Arrival & local discovery';desc=`Arrive in ${start}, settle into your accommodation, then explore a nearby attraction and local food.`}else if(i===days){title='Return, shopping & departure';desc='Enjoy a relaxed final morning, optional shopping and arrange transport back to your departure point.'}else{const key=interests[(i-2)%interests.length],x=places[key];title=x[0];desc=x[1]+'. Plan the route realistically and return to your accommodation in the evening.'}html+=`<div class="col-12"><article class="card day-card p-4"><div class="d-flex gap-3"><div class="day-number flex-shrink-0">${i}</div><div><h3 class="h5 fw-bold mb-2">${title}</h3><p class="mb-2 text-secondary">${desc}</p><div class="small text-secondary"><strong>Planning tip:</strong> Keep travel time between activities realistic and confirm opening times before departure.</div></div></div></article></div>`}
 $('#itinerary-list').html(html);
 const mult={budget:.72,standard:1,comfort:1.55}[style],rooms=Math.ceil(people/2),nights=Math.max(1,days-1);const accommodation=65000*rooms*nights*mult,transport=55000*days*mult,activities=70000*people*Math.max(1,days-2)*mult,food=45000*people*days*mult,total=accommodation+transport+activities+food;
 $('#costs').html(`<div class="col-md-6 col-lg"><div class="card cost-card p-4 h-100"><small class="text-secondary">Accommodation</small><strong class="fs-5 d-block mt-2">${money(accommodation)}</strong></div></div><div class="col-md-6 col-lg"><div class="card cost-card p-4 h-100"><small class="text-secondary">Transport</small><strong class="fs-5 d-block mt-2">${money(transport)}</strong></div></div><div class="col-md-6 col-lg"><div class="card cost-card p-4 h-100"><small class="text-secondary">Activities</small><strong class="fs-5 d-block mt-2">${money(activities)}</strong></div></div><div class="col-md-6 col-lg"><div class="card cost-card p-4 h-100"><small class="text-secondary">Food</small><strong class="fs-5 d-block mt-2">${money(food)}</strong></div></div><div class="col-12 col-lg"><div class="card total-card cost-card p-4 h-100"><small class="text-white-50">Estimated total</small><strong class="fs-5 d-block mt-2">${money(total)}</strong></div></div>`);
}
$(function(){$('.chip').each(function(){const input=$(this).find('input');const sync=()=>$(this).toggleClass('active',input.prop('checked'));sync();$(this).on('click',function(e){if(e.target!==input[0])input.prop('checked',!input.prop('checked'));sync()})});$('#generate').on('click',generate);generate()});
</script>
</body>
</html>
