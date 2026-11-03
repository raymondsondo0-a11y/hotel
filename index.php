<?php
// Raymond Report Generator for shizer.kesug.com
// Browser-side document analysis and report composition. No database or AI API is required.
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Create detailed 20–30 page academic and industrial training reports from two reference reports and your verified activity requirements.">
<title>Raymond Report Studio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
:root{--navy:#10213d;--blue:#2459d3;--cyan:#20b9c5;--ink:#1c2b42;--muted:#68778d;--line:#dce5f0;--soft:#f3f7fc;--green:#16866b}
*{box-sizing:border-box}body{margin:0;background:#eef3f9;color:var(--ink);font-family:Inter,system-ui,-apple-system,"Segoe UI",Arial,sans-serif}
.topbar{background:var(--navy);color:#fff;padding:13px 0;box-shadow:0 5px 22px #091a3328}.brand{color:#fff;text-decoration:none;font-weight:900;letter-spacing:.2px;font-size:1.08rem}.brand-icon{display:inline-grid;place-items:center;width:39px;height:39px;border-radius:12px;background:linear-gradient(135deg,#3475ff,#20c5bd);margin-right:9px}
.hero{position:relative;isolation:isolate;overflow:hidden;background:#142c4f!important;background-image:none!important;color:white;padding:58px 0 68px;min-height:360px;display:flex;align-items:center}.hero:before,.hero:after{content:"";position:absolute;inset:0;z-index:0;pointer-events:none;background-position:center 42%;background-size:cover;background-repeat:no-repeat;transition:opacity 1.6s ease-in-out;will-change:opacity}.hero:before{opacity:1;background-image:linear-gradient(110deg,rgba(8,22,48,.62),rgba(15,64,100,.18)),var(--grad-photo-a,url("https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=2000&q=85"))}.hero:after{opacity:0;background-image:linear-gradient(110deg,rgba(8,22,48,.62),rgba(15,64,100,.18)),var(--grad-photo-b)}.hero.photo-b:before{opacity:0}.hero.photo-b:after{opacity:1}.hero>.wrap{position:relative;z-index:1}
.hero h1{font-size:clamp(2rem,5vw,3.45rem);font-weight:900;letter-spacing:-1.6px;line-height:1.06}.hero p{max-width:780px;color:#e0efff;font-size:1.03rem}
.wrap{max-width:1320px;margin:auto;padding:0 18px}.workspace{margin-top:-24px;position:relative;z-index:2}.cardx{background:#fff;border:1px solid var(--line);border-radius:19px;box-shadow:0 15px 45px #1a355015}.side{padding:18px;position:sticky;top:12px}.step{display:flex;align-items:center;gap:10px;padding:11px 9px;border-radius:12px;font-size:.88rem;font-weight:700;color:#78869a}.step .num{width:29px;height:29px;border-radius:50%;display:grid;place-items:center;background:#edf1f7;color:#6d7a8f;flex-shrink:0}.step.active{background:#edf4ff;color:#1e4eb8}.step.active .num{background:var(--blue);color:#fff}.step.done{color:var(--green)}.step.done .num{background:#def7ed;color:var(--green)}
.main{padding:clamp(18px,3vw,34px);min-height:660px}.eyebrow{display:inline-block;background:#eaf1ff;color:#2253c2;border-radius:99px;padding:6px 11px;font-size:.76rem;font-weight:850;letter-spacing:.5px}.title{font-weight:900;letter-spacing:-.65px}.sub{color:var(--muted)}.form-label{font-size:.9rem;font-weight:750}.form-control,.form-select{border:1px solid #d6e0ed;border-radius:11px;padding:11px 13px}.form-control:focus,.form-select:focus{border-color:#6e99f7;box-shadow:0 0 0 .2rem #2459d31a}
.upload-box{height:100%;border:2px dashed #a9bdd9;background:#f8fbff;border-radius:16px;padding:23px;text-align:center;transition:.2s}.upload-box:hover,.upload-box.ready{border-color:var(--blue);background:#f0f5ff}.upload-box .big{font-size:2.25rem;color:var(--blue)}.file-row{display:flex;align-items:center;gap:9px;padding:9px 11px;border:1px solid var(--line);border-radius:10px;margin-top:8px;background:#fff;font-size:.86rem}.file-row .name{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex:1}.file-row .badge{font-size:.68rem}
.btn{border-radius:11px;font-weight:750;padding:10px 16px}.btn-primary{background:var(--blue);border-color:var(--blue)}.btn-success{background:#16866b;border-color:#16866b}.info{background:#eff7ff;border:1px solid #d8eaff;color:#365575;border-radius:12px;padding:12px 14px;font-size:.87rem}.warn{background:#fff8e9;border:1px solid #f5e0ae;color:#73561b;border-radius:12px;padding:12px 14px;font-size:.87rem}.progress{height:9px;border-radius:99px;background:#e8eef6}.progress-bar{background:linear-gradient(90deg,#2459d3,#20b9c5)}
.previewbox{background:#f5f7fb;border:1px solid var(--line);border-radius:13px;padding:15px;max-height:330px;overflow:auto;font-size:.87rem;white-space:pre-wrap}.activity-chip{display:inline-block;padding:7px 10px;margin:3px;border-radius:9px;background:#edf4ff;color:#244d9b;font-size:.82rem;font-weight:700}
.report-shell{background:#dfe6ef;padding:20px;border-radius:14px;overflow:auto}.report-paper{max-width:850px;margin:0 auto;background:#fff;color:#202b3a;box-shadow:0 5px 28px #10213b24;font-family:"Times New Roman",serif;font-size:12pt;line-height:1.5}
.report-page{box-sizing:border-box;min-height:275mm;padding:25mm 25mm 25mm 38mm;position:relative;break-after:page;page-break-after:always;overflow:hidden}
.report-page:last-child{break-after:auto;page-break-after:auto}.report-page h1{font-size:16pt;text-align:center;font-weight:bold;margin:0 0 17px;color:#142b50}.report-page h2{font-size:13pt;font-weight:bold;color:#173b72;border-bottom:1px solid #b9cbe3;padding-bottom:5px;margin:0 0 15px}.report-page h3{font-size:12pt;font-weight:bold;color:#203f70;margin:14px 0 7px}.report-page p{margin:0 0 10px;text-align:justify;text-indent:0}.report-page ul,.report-page ol{padding-left:24px}.report-page li{margin-bottom:5px}.report-page .cover-center{text-align:center}.report-page .cover-title{font-size:20pt;font-weight:bold;line-height:1.35;margin:28px 0}.report-page .cover-gap{height:17px}.report-page .fieldline{margin:9px 0;text-align:center}.report-page .smallnote{font-size:9pt;color:#536176}.report-page figure{margin:12px auto 14px;text-align:center;max-width:100%}.report-page figure img{max-width:100%;max-height:50mm;object-fit:contain}.report-page figcaption{font-size:9.5pt;text-align:center;margin-top:5px}.report-page table{width:100%;border-collapse:collapse;font-size:10pt;margin:10px 0}.report-page th,.report-page td{border:1px solid #8d9bad;padding:6px;vertical-align:top}.report-page th{background:#eaf0f8}.page-number{position:absolute;bottom:9mm;left:0;right:0;text-align:center;font-size:9pt;color:#596579}
.footer{padding:26px 0;color:#8390a4;font-size:.82rem}.hidden{display:none!important}.muted-small{font-size:.8rem;color:var(--muted)}
@media(max-width:991px){.side{position:static}.main{min-height:0}.hero{padding:37px 0 45px}}
@media(max-width:575px){.wrap{padding:0 11px}.hero{padding:32px 0 42px}.workspace{margin-top:-13px}.step{padding:8px 5px;font-size:.73rem;gap:5px}.step .num{width:24px;height:24px}.report-shell{padding:6px}.report-page{padding:15mm 11mm 18mm 16mm;min-height:270mm}.upload-box{padding:16px 10px}}
@media print{
@page{size:A4;margin:0}
html,body{background:#fff!important;margin:0!important;padding:0!important}
.topbar,.hero,.side,.no-print,.footer{display:none!important}
.workspace,.wrap,.row,main,.cardx,.main{display:block!important;width:100%!important;max-width:none!important;margin:0!important;padding:0!important;border:0!important;box-shadow:none!important;background:#fff!important}
#step4{display:block!important}.report-shell{padding:0!important;margin:0!important;background:#fff!important;border:0!important;overflow:visible!important}
.report-paper{max-width:none!important;margin:0!important;box-shadow:none!important}
.report-page{width:210mm;height:297mm;min-height:297mm;max-height:297mm;margin:0!important;padding:25mm 25mm 25mm 38mm;overflow:hidden;break-after:page;page-break-after:always;print-color-adjust:exact;-webkit-print-color-adjust:exact}
.report-page:last-child{break-after:auto;page-break-after:auto}
}

/* Distinctive editorial studio visual system */
:root{--navy:#172b35;--blue:#a94f32;--cyan:#c7d8cb;--ink:#202b2b;--muted:#68716b;--line:#d8d8cd;--soft:#f4f1e8;--green:#376b58}
html{scroll-behavior:smooth}
body{background:#f1efe7;color:#202b2b;font-family:Inter,"Aptos","Segoe UI",Arial,sans-serif;font-size:15px}
.topbar{background:#172b35;padding:12px 0;box-shadow:none;border-bottom:3px solid #b96848}
.brand{font-size:1rem;letter-spacing:1.1px;text-transform:uppercase}
.brand-icon{width:35px;height:35px;border-radius:5px;background:#b96848;margin-right:11px}
.hero{min-height:400px;padding:68px 0 78px;background:#172b35!important;align-items:center}
.hero:before,.hero:after{display:none!important}
.hero-slideshow{position:absolute;inset:0;z-index:0;overflow:hidden;background:#172b35;pointer-events:none}
.hero-photo{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 43%;opacity:0;transition:opacity 1.8s ease-in-out;transform:scale(1.025);will-change:opacity}
.hero-photo.is-active{opacity:1}
.hero-shade{position:absolute;inset:0;background:linear-gradient(90deg,rgba(15,31,37,.88) 0%,rgba(15,31,37,.69) 48%,rgba(15,31,37,.22) 100%),linear-gradient(0deg,rgba(15,31,37,.28),transparent 65%)}
.hero>.wrap{position:relative;z-index:1}
.hero-kicker{background:#f3e9db;color:#783f2b;border-radius:3px;padding:8px 12px;font-size:.72rem;letter-spacing:1.2px}
.hero h1{font-family:Georgia,"Times New Roman",serif;font-size:clamp(2.4rem,5vw,4.3rem);font-weight:700;letter-spacing:-1.5px;line-height:1.04;max-width:800px}
.hero h1 span{color:#e8b89c!important}
.hero p{max-width:690px;color:#f0eee7;font-size:1.04rem;line-height:1.8}
.workspace{margin-top:-30px}
.cardx{border:1px solid #d8d8cd;border-radius:8px;box-shadow:0 8px 24px rgba(31,42,38,.07)}
.side{padding:20px;background:#fbfaf5}
.step{border-radius:5px;padding:12px 10px;color:#6d766f}
.step .num{border-radius:4px;background:#e8e7de;color:#59645d}
.step.active{background:#e9eee7;color:#234a3b;border-left:3px solid #b96848}
.step.active .num{background:#234a3b;color:#fff}
.step.done .num{border-radius:4px;background:#dfece3}
.main{padding:clamp(20px,3vw,38px);background:#fffefa;min-height:660px}
.eyebrow{border-radius:3px;background:#e9eee7;color:#234a3b;padding:7px 10px;font-size:.7rem;letter-spacing:1px}
.title{font-family:Georgia,"Times New Roman",serif;font-weight:700;letter-spacing:-.45px;color:#202b2b}
.sub{color:#68716b;line-height:1.75}
.form-label{font-size:.84rem;font-weight:750;color:#34433d}
.form-control,.form-select{border:1px solid #d2d5ca;border-radius:5px;padding:12px 13px;background:#fffefa}
.form-control:focus,.form-select:focus{border-color:#b96848;box-shadow:0 0 0 .18rem rgba(185,104,72,.13)}
.upload-box{border:1px dashed #aab5a8;background:#f8f7f0;border-radius:6px;padding:25px}
.upload-box:hover,.upload-box.ready{border-color:#b96848;background:#f8eee6}
.upload-box .big{color:#a94f32}
.file-row{border-radius:5px;border-color:#deded4;background:#fffefa}
.btn{border-radius:5px;font-weight:750;padding:11px 17px;letter-spacing:.1px}
.btn-primary{background:#a94f32;border-color:#a94f32}
.btn-primary:hover,.btn-primary:focus{background:#873d28;border-color:#873d28}
.btn-success{background:#376b58;border-color:#376b58}
.btn-outline-secondary{border-color:#aeb6ad;color:#435047}
.info{background:#eef2ea;border:1px solid #d8e2d3;color:#3c5648;border-radius:5px;line-height:1.6}
.warn{background:#fbf0e5;border:1px solid #ead2bc;color:#794a2c;border-radius:5px;line-height:1.6}
.progress{height:7px;border-radius:2px;background:#e4e4da}
.progress-bar{background:#a94f32}
.previewbox{background:#f6f4ec;border:1px solid #deded4;border-radius:5px}
.activity-chip{border-radius:3px;background:#e9eee7;color:#234a3b}
.report-shell{background:#e6e4da;border-radius:5px}
.report-paper{box-shadow:0 4px 18px rgba(28,38,33,.15)}
.footer{color:#777f75}
@media(max-width:991px){.hero{padding:48px 0 56px;min-height:340px}}
@media(max-width:575px){.hero{padding:38px 0 46px;min-height:330px}.hero h1{letter-spacing:-.8px}.workspace{margin-top:-15px}.main{padding:19px 15px}.hero-shade{background:linear-gradient(90deg,rgba(15,31,37,.82),rgba(15,31,37,.45))}}

/* Bootstrap-based bespoke editorial redesign */
:root{--bs-primary:#a64e32;--bs-primary-rgb:166,78,50;--bs-success:#386b57;--bs-success-rgb:56,107,87;--rr-ink:#202b29;--rr-muted:#6c746e;--rr-paper:#f0eee6;--rr-line:#d8d8ce}
html{scroll-behavior:smooth;scroll-padding-top:24px}
body{background:var(--rr-paper);color:var(--rr-ink);font-family:Arial,"Helvetica Neue",sans-serif;font-size:15px;letter-spacing:.01em}
.topbar{position:relative;background:#1e302e;color:#fff;padding:15px 0;border-bottom:4px solid #b56b4d;box-shadow:none}
.brand{display:flex;align-items:center;gap:12px;color:#fff!important}
.brand-icon{display:inline-grid;place-items:center;width:39px;height:39px;border-radius:4px;background:#b56b4d;color:#fff;margin:0;font-size:1.2rem}
.brand-word{font-size:.88rem;font-weight:800;letter-spacing:1.1px;line-height:1.2}
.brand-word span{display:block;color:#d6b59f;font-size:.68rem;letter-spacing:2px;margin-top:4px}
.nav-meta{font-size:.65rem;letter-spacing:1.4px;color:#c9d0c9;font-weight:700}
.nav-meta a{color:#f3e6d9;text-decoration:none;font-size:.72rem;letter-spacing:.4px;border-bottom:1px solid #b56b4d;padding-bottom:4px}
.nav-dot{width:7px;height:7px;background:#d1a88d;border-radius:50%}
.nav-divider{height:24px;border-left:1px solid #52605b}
.hero{min-height:490px;padding:65px 0 94px;background:#1e302e!important;color:#fff;align-items:center}
.hero:before,.hero:after{display:none!important}
.hero-slideshow{position:absolute;inset:0;z-index:0;overflow:hidden;background:#1e302e;pointer-events:none}
.hero-photo{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 42%;opacity:0;transition:opacity 1.8s ease-in-out;transform:scale(1.02);will-change:opacity}
.hero-photo.is-active{opacity:1}
.hero-shade{position:absolute;inset:0;background:linear-gradient(90deg,rgba(22,42,39,.94) 0%,rgba(22,42,39,.85) 45%,rgba(22,42,39,.52) 100%),linear-gradient(0deg,rgba(22,42,39,.36),transparent 70%)}
.hero>.wrap{position:relative;z-index:1}
.hero-kicker{display:flex;align-items:center;gap:10px;background:none;color:#e7c2a9;border-radius:0;padding:0;font-size:.69rem;font-weight:800;letter-spacing:2px}
.hero-kicker-line{width:34px;height:2px;background:#c07a59;display:inline-block}
.hero h1{font-family:Georgia,"Times New Roman",serif;font-size:clamp(2.65rem,5vw,4.8rem);font-weight:500;letter-spacing:-1.9px;line-height:1.03;max-width:800px;margin-bottom:0}
.hero h1 em{font-weight:400;color:#e0b59a}
.hero p{max-width:640px;color:#e1e6df;font-size:1rem;line-height:1.85}
.btn-hero-primary{background:#c17a59;color:#fff;border:1px solid #c17a59;border-radius:3px;padding:13px 19px;font-size:.84rem}
.btn-hero-primary:hover{background:#a65e40;color:#fff;border-color:#a65e40}
.hero-note{font-size:.76rem;color:#e0e4dc}
.hero-index{background:rgba(24,43,40,.72);border:1px solid rgba(237,225,207,.36);padding:21px 22px 15px;backdrop-filter:none;box-shadow:10px 10px 0 rgba(191,122,89,.26)}
.hero-index-head,.hero-index-foot{display:flex;justify-content:space-between;align-items:center;font-size:.63rem;letter-spacing:1.4px;color:#d2b9a5;font-weight:800}
.hero-index-head{padding-bottom:15px;border-bottom:1px solid rgba(255,255,255,.18)}
.hero-index-title{font-family:Georgia,"Times New Roman",serif;font-size:1.9rem;line-height:1.06;padding:18px 0;color:#fff}
.hero-index-list>div{display:flex;align-items:center;gap:12px;padding:10px 0;border-top:1px solid rgba(255,255,255,.12);font-size:.75rem}
.hero-index-list>div span{font-size:.67rem;color:#d8a58a;font-weight:800}
.hero-index-list>div b{font-weight:600;flex:1;color:#edf0e9}
.hero-index-list>div i{color:#d8a58a}
.hero-index-foot{margin-top:12px;padding-top:12px;border-top:1px solid rgba(255,255,255,.18);font-size:.55rem;color:#bfc9bf}
.workspace{margin-top:-34px;position:relative;z-index:2}
.cardx{background:#fffef9;border:1px solid var(--rr-line);border-radius:4px;box-shadow:0 10px 28px rgba(32,43,41,.065)}
.side{padding:22px 18px;position:sticky;top:12px;background:#e6e7dc;border-color:#d4d6ca}
.side>.text-uppercase{color:#53605a!important;font-size:.65rem!important;letter-spacing:1.6px!important}
.step{display:flex;align-items:center;gap:10px;padding:12px 9px;border-radius:3px;font-size:.82rem;font-weight:700;color:#6b756e;border-left:3px solid transparent}
.step .num{width:27px;height:27px;border-radius:3px;display:grid;place-items:center;background:#d4d9cf;color:#58635c;flex-shrink:0;font-size:.72rem}
.step.active{background:#f8f6ed;color:#294c3f;border-left-color:#b56b4d}
.step.active .num{background:#294c3f;color:#fff}
.step.done{color:#386b57}
.step.done .num{background:#d3e3d6;color:#386b57}
.main{padding:clamp(20px,3vw,39px);min-height:660px;background:#fffef9}
.eyebrow{display:inline-block;background:#e9ece3;color:#355744;border-left:3px solid #b56b4d;border-radius:0;padding:7px 10px;font-size:.66rem;font-weight:850;letter-spacing:1.2px}
.title{font-family:Georgia,"Times New Roman",serif;font-weight:700;letter-spacing:-.55px;color:#202b29;font-size:clamp(1.6rem,2.8vw,2.1rem)}
.sub{color:#6c746e;line-height:1.8;max-width:850px}
.form-label{font-size:.81rem;font-weight:800;color:#394a42}
.form-control,.form-select{border:1px solid #d1d5ca;border-radius:3px;padding:12px 13px;background:#fffefb;color:#202b29}
.form-control:focus,.form-select:focus{border-color:#b56b4d;box-shadow:0 0 0 .17rem rgba(181,107,77,.14)}
.upload-box{border:1px dashed #a8b3a6;background:#f7f6ef;border-radius:3px;padding:24px;text-align:left;transition:background .2s,border-color .2s}
.upload-box:hover,.upload-box.ready{border-color:#b56b4d;background:#f5ebe3}
.upload-box .big{font-size:2rem;color:#a64e32}
.upload-box h5{font-family:Georgia,"Times New Roman",serif;font-size:1.2rem}
.btn{border-radius:3px;font-weight:750;padding:10px 16px;font-size:.84rem}
.btn-primary{background:#a64e32;border-color:#a64e32}
.btn-primary:hover,.btn-primary:focus{background:#843b27;border-color:#843b27}
.btn-success{background:#386b57;border-color:#386b57}
.btn-outline-secondary{border-color:#adb5aa;color:#435047}
.info,.warn{border-radius:3px;padding:13px 15px;line-height:1.7;font-size:.85rem}
.info{background:#edf1e9;border:1px solid #d8e2d3;color:#3c5648}
.warn{background:#fbf0e5;border:1px solid #ead2bc;color:#794a2c}
.progress{height:6px;border-radius:0;background:#e4e4da}
.progress-bar{background:#a64e32}
.previewbox{background:#f5f3eb;border:1px solid #deded4;border-radius:3px}
.activity-chip{border-radius:2px;background:#e6ece2;color:#294c3f}
.report-shell{background:#deded5;border-radius:3px}
.report-paper{box-shadow:0 4px 18px rgba(28,38,33,.15)}
.footer{color:#737b72;padding-top:24px;padding-bottom:24px;font-size:.75rem;border-top:1px solid #d5d6ca;margin-top:34px}
@media(max-width:991px){.hero{padding:50px 0 75px;min-height:390px}.hero-index{margin-top:12px}}
@media(max-width:575px){.hero{padding:39px 0 58px;min-height:360px}.hero h1{letter-spacing:-1px}.workspace{margin-top:-20px}.main{padding:20px 15px}.hero-shade{background:linear-gradient(90deg,rgba(22,42,39,.91),rgba(22,42,39,.74))}.hero-copy{padding-right:12px}}

/* Final visual refinement: open layout, softer surfaces, no visible scrollbars */
html,body{scrollbar-width:none!important;-ms-overflow-style:none!important}
html::-webkit-scrollbar,body::-webkit-scrollbar,*::-webkit-scrollbar{width:0!important;height:0!important;display:none!important}
body{background:#e8e2d5!important;color:#263a32!important}
:root{--bs-body-bg:#e8e2d5;--bs-body-color:#263a32;--bs-primary:#315747;--bs-success:#315747;--bs-border-color:#c9c1b2}
main,.main,.workspace,.app-shell,.page-shell,.wrap{scrollbar-width:none!important}
.card,.panel,.step-card,.feature-card,.tool-card,.workspace-card,.report-card,.result-card,.form-card,.upload-card,.info-card{
  border-radius:0!important;box-shadow:none!important;border:0!important;
  background:rgba(226,219,205,.72)!important;
}
.card-header,.card-body,.card-footer{background:transparent!important;border:0!important}
.card-body,.panel,.step-card,.feature-card,.tool-card,.workspace-card,.report-card,.result-card,.form-card,.upload-card,.info-card{
  padding:clamp(1rem,2.3vw,2rem)!important
}
section{border-radius:0!important}
input,select,textarea,.form-control,.form-select,.btn{border-radius:3px!important}
input,select,textarea,.form-control,.form-select{
  background-color:#f0eadf!important;border-color:#c8c0b2!important;color:#263a32!important
}
label,.form-label{color:#34483e!important}
.navbar,.site-nav,header:not(.hero){background:#e8e2d5!important}
.hero{background-color:#b9b8a8!important}
.hero .wrap{position:relative;z-index:1}
.hero-shade{background:linear-gradient(90deg,rgba(24,43,35,.77),rgba(24,43,35,.34))!important}
.hero h1,.hero h2,.hero p,.hero .eyebrow{color:#fffaf0}
.container,.container-fluid{--bs-gutter-x:clamp(1rem,3vw,2.5rem)}
.row{--bs-gutter-y:1.25rem}
hr,.border,.border-bottom,.border-top{border-color:rgba(65,79,65,.2)!important}
.btn-primary,.btn-success{background:#315747!important;border-color:#315747!important}
.btn-outline-primary,.btn-outline-success{color:#315747!important;border-color:#6d8877!important}
.btn-outline-primary:hover,.btn-outline-success:hover{background:#315747!important;color:#fffaf0!important}
@media(max-width:767px){
  .hero{padding-top:3rem!important;padding-bottom:3rem!important}
  .card-body,.panel,.step-card,.feature-card,.tool-card,.workspace-card,.report-card,.result-card,.form-card,.upload-card,.info-card{padding:1rem!important}
}


/* Creation process: generously padded, clear glass panel */
.side{
  padding:clamp(24px,3vw,36px)!important;
  background:rgba(246,242,232,.16)!important;
  border:1px solid rgba(255,255,255,.52)!important;
  border-radius:4px!important;
  box-shadow:inset 0 1px 0 rgba(255,255,255,.34),0 18px 48px rgba(31,49,39,.10)!important;
  -webkit-backdrop-filter:blur(18px) saturate(145%)!important;
  backdrop-filter:blur(18px) saturate(145%)!important;
}
.side>.text-uppercase{margin-bottom:22px!important;color:#263a32!important;letter-spacing:1.8px!important;font-size:.72rem!important}
.side .step{
  padding:14px 12px!important;
  margin:7px 0!important;
  gap:13px!important;
  background:rgba(255,255,255,.19)!important;
  border:1px solid rgba(255,255,255,.30)!important;
  border-radius:3px!important;
  color:#263a32!important;
  transition:background .25s ease,border-color .25s ease,transform .25s ease;
}
.side .step .num{
  flex:0 0 32px!important;width:32px!important;height:32px!important;
  border:1px solid rgba(49,87,71,.30)!important;
  background:rgba(255,255,255,.30)!important;color:#315747!important;
}
.side .step.active,.side .step.current,.side .step:focus-within{
  background:rgba(255,255,255,.40)!important;
  border-color:rgba(255,255,255,.72)!important;
}
.side .step:hover{background:rgba(255,255,255,.35)!important;transform:translateX(2px)}
@media(max-width:991px){.side{padding:22px!important;position:static!important}}
@media(prefers-reduced-motion:reduce){.side .step{transition:none}}


/* PURE GLASS MATERIAL — Creation process panel and step controls */
aside .cardx.side{
  position:sticky!important;top:16px!important;padding:30px 26px!important;
  background:linear-gradient(135deg,rgba(255,255,255,.13),rgba(255,255,255,.035) 52%,rgba(255,255,255,.09))!important;
  border:1px solid rgba(255,255,255,.68)!important;border-radius:8px!important;
  box-shadow:inset 0 1px 0 rgba(255,255,255,.72),inset 1px 0 0 rgba(255,255,255,.22),0 18px 48px rgba(25,45,35,.12)!important;
  -webkit-backdrop-filter:blur(24px) saturate(180%)!important;backdrop-filter:blur(24px) saturate(180%)!important;
  overflow:hidden!important;position:sticky!important;
}
aside .cardx.side:before{content:"";position:absolute;inset:0;pointer-events:none;background:linear-gradient(125deg,rgba(255,255,255,.16),transparent 34%,transparent 72%,rgba(255,255,255,.07))}
aside .cardx.side>*{position:relative;z-index:1}
aside .cardx.side>.text-uppercase{padding:0 0 17px!important;margin:0 0 14px!important;color:#243d31!important;font-size:.72rem!important;letter-spacing:2px!important;border-bottom:1px solid rgba(255,255,255,.52)!important}
aside .cardx.side .step{display:flex!important;align-items:center!important;gap:14px!important;min-height:58px!important;padding:13px 14px!important;margin:8px 0!important;color:#24392f!important;font-size:.88rem!important;font-weight:650!important;background:rgba(255,255,255,.055)!important;border:1px solid rgba(255,255,255,.38)!important;border-radius:5px!important;box-shadow:inset 0 1px 0 rgba(255,255,255,.24)!important;transform:none!important;transition:background .22s ease,border-color .22s ease,box-shadow .22s ease!important}
aside .cardx.side .step .num{flex:0 0 34px!important;width:34px!important;height:34px!important;display:grid!important;place-items:center!important;background:rgba(255,255,255,.10)!important;color:#254a39!important;border:1px solid rgba(255,255,255,.65)!important;border-radius:50%!important;box-shadow:inset 0 1px 0 rgba(255,255,255,.65)!important}
aside .cardx.side .step.active{background:rgba(255,255,255,.20)!important;border-color:rgba(255,255,255,.82)!important;box-shadow:inset 0 1px 0 rgba(255,255,255,.8),0 5px 18px rgba(35,60,46,.07)!important}
aside .cardx.side .step:hover{background:rgba(255,255,255,.16)!important;border-color:rgba(255,255,255,.72)!important}
aside .cardx.side hr{border-color:rgba(255,255,255,.55)!important;opacity:1!important;margin:22px 0!important}
aside .cardx.side .small{color:#34483d!important;line-height:1.65!important}
@media(max-width:991px){aside .cardx.side{position:relative!important;top:auto!important;padding:22px 18px!important}}
@media(prefers-reduced-motion:reduce){aside .cardx.side .step{transition:none!important}}

</style>
</head>
<body>
<nav class="topbar navbar navbar-expand-lg"><div class="wrap container-fluid px-0"><a class="brand navbar-brand m-0" href="#"><span class="brand-icon"><i class="bi bi-journal-richtext"></i></span><span class="brand-word">RAYMOND <span>REPORT STUDIO</span></span></a><div class="nav-meta d-none d-md-flex align-items-center gap-3"><span class="nav-dot"></span><span>DOCUMENT PRODUCTION WORKSPACE</span><span class="nav-divider"></span><a href="#step1">Start a report <i class="bi bi-arrow-up-right"></i></a></div></div></nav>
<header class="hero"><div class="hero-slideshow" aria-hidden="true"><img class="hero-photo is-active" alt="" src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=2000&q=85"><img class="hero-photo" alt="" src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=2000&q=85"><span class="hero-shade"></span></div><div class="wrap container-fluid px-0"><div class="row align-items-center g-5"><div class="col-lg-8 hero-copy"><div class="hero-kicker"><span class="hero-kicker-line"></span> A BETTER WAY TO BUILD REPORTS</div><h1 class="mt-4">Turn your fieldwork<br>into a <em>proper report.</em></h1><p class="mt-4 mb-4">A practical workspace for industrial training and academic reports. Bring your own reference documents, describe the work you completed, and organise the evidence into a report you can review, download and print.</p><div class="hero-actions d-flex flex-wrap align-items-center gap-3"><a class="btn btn-hero-primary" href="#step1">Build a report <i class="bi bi-arrow-down-right ms-2"></i></a><span class="hero-note"><i class="bi bi-shield-check me-2"></i>Files stay in your browser</span></div></div><div class="col-lg-4 d-none d-lg-block"><div class="hero-index"><div class="hero-index-head"><span>WORKFLOW / 01—05</span><i class="bi bi-arrow-up-right"></i></div><div class="hero-index-title">From source<br>to submission.</div><div class="hero-index-list"><div><span>01</span><b>Reference format</b><i class="bi bi-check2"></i></div><div><span>02</span><b>Activities & evidence</b><i class="bi bi-check2"></i></div><div><span>03</span><b>Report details</b><i class="bi bi-check2"></i></div><div><span>04</span><b>Images & structure</b><i class="bi bi-check2"></i></div><div><span>05</span><b>Export & print</b><i class="bi bi-arrow-up-right"></i></div></div><div class="hero-index-foot"><span>RRS</span><span>REPORT STUDIO · EST. 2026</span></div></div></div></div></div></header>
<div class="wrap workspace"><div class="row g-3">
<aside class="col-lg-3"><div class="cardx side"><div class="text-uppercase fw-bold small text-secondary mb-3" style="letter-spacing:1px">Creation process</div>
<div class="step active" data-step="1"><span class="num">1</span><span>Reference reports</span></div><div class="step" data-step="2"><span class="num">2</span><span>Activities & requirements</span></div><div class="step" data-step="3"><span class="num">3</span><span>Report details</span></div><div class="step" data-step="4"><span class="num">4</span><span>Analyse & research images</span></div><div class="step" data-step="5"><span class="num">5</span><span>Complete report</span></div>
<hr><div class="small text-secondary"><i class="bi bi-shield-lock-fill text-success me-1"></i>Documents are read inside your browser. They are not uploaded to a database.</div><div class="small text-secondary mt-2"><i class="bi bi-images text-primary me-1"></i>Images are searched from Wikimedia Commons and credited in the report.</div></div></aside>
<main class="col-lg-9"><div class="cardx main">
<section id="step1"><span class="eyebrow">STEP 01 / FORMAT REFERENCES</span><h2 class="title mt-3">Upload the two example reports</h2><p class="sub">Both completed reports are used only to identify the report arrangement, chapter sequence, heading hierarchy, numbering, tables, captions and writing conventions. Their subject matter and paragraphs will not be copied into your new report.</p>
<div class="row g-3 mt-2">
<div class="col-md-6"><div class="upload-box" id="refBox1"><i class="bi bi-file-earmark-pdf big"></i><h5 class="fw-bold mt-2">Reference report 1</h5><p class="muted-small">Main example for structure and presentation</p><input type="file" id="ref1" class="form-control" accept=".pdf,.docx,.txt"></div><div id="refName1"></div></div>
<div class="col-md-6"><div class="upload-box" id="refBox2"><i class="bi bi-file-earmark-pdf big"></i><h5 class="fw-bold mt-2">Reference report 2</h5><p class="muted-small">Second example to compare the required format</p><input type="file" id="ref2" class="form-control" accept=".pdf,.docx,.txt"></div><div id="refName2"></div></div>
</div>
<div class="info mt-3"><i class="bi bi-info-circle me-1"></i>The reference reports define presentation only. The new report's facts, tasks, activities and discussion will come from your activity-review requirements document and the details you provide.</div>
<div id="uploadStatus" class="small text-secondary mt-3" aria-live="polite">Upload both reference reports to continue.</div><div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" id="go2">Continue <i class="bi bi-arrow-right ms-1"></i></button></div></section>
<section id="step2" class="hidden"><span class="eyebrow">STEP 02 / FACTUAL SOURCE</span><h2 class="title mt-3">Upload activities performed and report requirements</h2><p class="sub">This is the main source for the report's actual content. It may be an activity-review document, logbook, task list, supervisor review or a combination of them.</p>
<div class="upload-box mt-3" id="reqBox"><i class="bi bi-clipboard2-check big"></i><h5 class="fw-bold mt-2">Activity review / requirements document</h5><p class="muted-small">Upload the document that describes tasks performed, reviewed activities, objectives and report requirements.</p><input type="file" id="reqFile" class="form-control" accept=".pdf,.docx,.txt"></div><div id="reqName"></div>
<div class="mt-3"><label class="form-label">Additional supporting records (optional)</label><input type="file" id="extraFiles" class="form-control" multiple accept=".pdf,.docx,.txt,.png,.jpg,.jpeg,.webp"><div id="extraNames" class="mt-2"></div></div>
<div class="warn mt-3"><i class="bi bi-exclamation-triangle me-1"></i>Do not upload passwords, private network credentials or confidential customer records. Only include information you are authorised to use in an academic report.</div>
<div class="d-flex justify-content-between mt-4"><button class="btn btn-outline-secondary" id="back1">Back</button><button class="btn btn-primary" id="go3">Continue <i class="bi bi-arrow-right ms-1"></i></button></div></section>
<section id="step3" class="hidden"><span class="eyebrow">STEP 03 / REPORT PARTICULARS</span><h2 class="title mt-3">Enter the report details</h2><p class="sub">These particulars are used for the cover page and relevant sections. Information can be left blank if it is not applicable.</p>
<div class="row g-3 mt-1">
<div class="col-md-6"><label class="form-label">Report title / subject</label><input id="rTitle" class="form-control" placeholder="Will be identified from your activity document if blank"></div>
<div class="col-md-6"><label class="form-label">Report type</label><select id="rType" class="form-select"><option>Industrial Training Report</option><option>Field Training Report</option><option>Internship Report</option><option>Technical Report</option><option>Project Report</option></select></div>
<div class="col-md-6"><label class="form-label">Student / author name</label><input id="author" class="form-control" value="Raymond Sondo"></div>
<div class="col-md-6"><label class="form-label">Registration number</label><input id="reg" class="form-control" placeholder="Enter registration number"></div>
<div class="col-md-6"><label class="form-label">University / institution</label><input id="institution" class="form-control" value="The University of Dodoma"></div>
<div class="col-md-6"><label class="form-label">College / faculty</label><input id="college" class="form-control" value="College of Informatics and Virtual Education"></div>
<div class="col-md-6"><label class="form-label">Department / programme</label><input id="department" class="form-control" placeholder="e.g. BIS / department"></div>
<div class="col-md-6"><label class="form-label">Course code</label><input id="course" class="form-control" placeholder="Enter course code"></div>
<div class="col-md-6"><label class="form-label">Host organisation / company</label><input id="company" class="form-control" placeholder="Company name"></div>
<div class="col-md-6"><label class="form-label">Company department / unit</label><input id="unit" class="form-control" placeholder="Department where training took place"></div>
<div class="col-md-6"><label class="form-label">Company location</label><input id="location" class="form-control" placeholder="District and region"></div>
<div class="col-md-6"><label class="form-label">Training period</label><input id="period" class="form-control" placeholder="Start date – end date"></div>
<div class="col-md-6"><label class="form-label">Company supervisor</label><input id="companySupervisor" class="form-control" placeholder="Full name and position"></div>
<div class="col-md-6"><label class="form-label">Academic supervisor</label><input id="academicSupervisor" class="form-control" placeholder="Full name"></div>
<div class="col-md-6"><label class="form-label">Academic year</label><input id="year" class="form-control" placeholder="e.g. 2026/2027"></div>
<div class="col-md-6"><label class="form-label">Report language</label><select id="lang" class="form-select"><option>English</option><option>Kiswahili</option></select></div>
<div class="col-12"><label class="form-label">Detailed descriptions of work performed (optional)</label><textarea id="activityDetails" rows="5" class="form-control" placeholder="Describe each networking task in more detail: what you did, tools used, steps followed, what you observed, and what you learned. Use a separate paragraph for each activity."></textarea><div class="form-text">Only enter work you actually performed or observed.</div></div><div class="col-12"><label class="form-label">Extra verified facts (optional)</label><textarea id="extraFacts" rows="3" class="form-control" placeholder="Add company background, dates, device models, tools, outcomes or other verified details."></textarea></div><div class="col-12"><div class="border rounded-3 p-3"><h5 class="fw-bold"><i class="bi bi-images me-2 text-primary"></i>Workplace photos and networking equipment</h5><p class="muted-small">Upload your own photos of routers, switches, access points, RJ45 connectors, crimping tools, cable testers, spanners, ladders, racks, cables and other equipment used during training.</p><label class="form-label">Upload photos (JPG, PNG or WEBP)</label><input id="workPhotos" type="file" class="form-control" accept="image/jpeg,image/png,image/webp" multiple><div class="form-text">Select several photos and add a caption to each one. They will be included in a photographic evidence section of the report.</div><div id="photoList" class="row g-3 mt-2"></div></div></div>
</div><div class="d-flex justify-content-between mt-4"><button class="btn btn-outline-secondary" id="back2">Back</button><button class="btn btn-primary" id="analyse">Analyse documents <i class="bi bi-search ms-1"></i></button></div></section>
<section id="step4" class="hidden"><span class="eyebrow">STEP 04 / DOCUMENT ANALYSIS</span><h2 class="title mt-3">Analysing the reference format and activities</h2><p class="sub">The two sample reports are compared for structure only. The activity-review document is analysed separately to identify the real tasks for the new report.</p>
<div class="progress my-3"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progress" style="width:0%"></div></div><div id="status" class="info">Preparing to read documents…</div>
<div class="row g-3 mt-2"><div class="col-md-6"><div class="border rounded-3 p-3 h-100"><h6 class="fw-bold"><i class="bi bi-layout-text-sidebar-reverse text-primary me-1"></i>Reference structure detected</h6><div id="structureList" class="muted-small">Waiting for analysis…</div></div></div><div class="col-md-6"><div class="border rounded-3 p-3 h-100"><h6 class="fw-bold"><i class="bi bi-list-check text-success me-1"></i>Activities identified</h6><div id="activitiesList" class="muted-small">Waiting for analysis…</div></div></div></div>
<div class="mt-3"><h6 class="fw-bold">Extracted activity source preview</h6><div id="sourcePreview" class="previewbox">Waiting for analysis…</div></div>
<div class="d-flex justify-content-between mt-4"><button class="btn btn-outline-secondary" id="back3">Back</button><button class="btn btn-success" id="build" disabled><i class="bi bi-file-earmark-richtext me-1"></i>Generate full report</button></div></section>
<section id="step5" class="hidden"><span class="eyebrow">STEP 05 / FINISHED REPORT</span><h2 class="title mt-3">Your report is ready</h2><p class="sub">The report is fully written from the activity source, follows the detected report structure and includes relevant online illustrations. Review and edit it, then download or print.</p>
<div class="d-flex flex-wrap gap-2 no-print mb-3"><button class="btn btn-primary" id="downloadDocx"><i class="bi bi-file-earmark-word me-1"></i>Download Word (.docx)</button><button class="btn btn-danger" id="downloadPdf"><i class="bi bi-file-earmark-pdf me-1"></i>Download PDF</button><button class="btn btn-outline-primary" id="downloadHtml"><i class="bi bi-filetype-html me-1"></i>Download report copy</button><button class="btn btn-outline-dark" id="printReport"><i class="bi bi-printer me-1"></i>Print / Save PDF</button><button class="btn btn-outline-secondary" id="rebuild"><i class="bi bi-arrow-repeat me-1"></i>Regenerate</button></div>
<div class="info no-print mb-3" id="reportStats"></div><div class="small mb-3" id="exportStatus" role="status" aria-live="polite"></div><div class="report-shell"><div id="report" class="report-paper" contenteditable="true" spellcheck="true"></div></div>
<div class="d-flex justify-content-between mt-4 no-print"><button class="btn btn-outline-secondary" id="back4">Back to analysis</button><button class="btn btn-primary" id="startOver">Create another report</button></div></section>
</div></main></div></div>
<footer class="wrap footer d-flex justify-content-between flex-wrap gap-2"><span>© <span id="footYear"></span> Raymond Report Studio</span><span>Two structure references · One factual activity source · Online illustrations</span></footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.8.0/mammoth.browser.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/docx/8.5.2/docx.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
(function(){
"use strict";
const $=id=>document.getElementById(id);
const state={ref1:null,ref2:null,req:null,extras:[],refTexts:[],activityText:"",activities:[],structure:[],images:[],userImages:[],pages:[],sourceNames:[]};
$("footYear").textContent=new Date().getFullYear();
if(window.pdfjsLib){pdfjsLib.GlobalWorkerOptions.workerSrc="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";}
function esc(s){return String(s||"").replace(/[&<>"']/g,c=>({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"}[c]));}
function show(n){for(let i=1;i<=5;i++){ $("step"+i).classList.toggle("hidden",i!==n);let e=document.querySelector('[data-step="'+i+'"]');e.classList.toggle("active",i===n);e.classList.toggle("done",i<n);}window.scrollTo({top:0,behavior:"smooth"});}
function addFileName(target,file,label){$(target).innerHTML=file?'<div class="file-row"><i class="bi bi-file-earmark-check text-success"></i><span class="name">'+esc(file.name)+'</span><span class="badge text-bg-success">'+label+'</span></div>':"";}
$("ref1").addEventListener("change",e=>{state.ref1=e.target.files[0]||null;addFileName("refName1",state.ref1,"FORMAT 1");$("refBox1").classList.toggle("ready",!!state.ref1);$("uploadStatus").textContent=state.ref1?"Reference report 1 selected. "+(state.ref2?"Both reference reports are ready.":"Now select reference report 2."):"Reference report 1 was removed.";});
$("ref2").addEventListener("change",e=>{state.ref2=e.target.files[0]||null;addFileName("refName2",state.ref2,"FORMAT 2");$("refBox2").classList.toggle("ready",!!state.ref2);$("uploadStatus").textContent=state.ref2?"Reference report 2 selected. "+(state.ref1?"Both reference reports are ready. You can continue.":"Now select reference report 1."):"Reference report 2 was removed.";});
$("reqFile").addEventListener("change",e=>{state.req=e.target.files[0]||null;addFileName("reqName",state.req,"ACTIVITY SOURCE");$("reqBox").classList.toggle("ready",!!state.req);});
$("extraFiles").addEventListener("change",e=>{state.extras=Array.from(e.target.files||[]);$("extraNames").innerHTML=state.extras.map(f=>'<div class="file-row"><i class="bi bi-paperclip"></i><span class="name">'+esc(f.name)+'</span><span class="muted-small">'+Math.round(f.size/1024)+' KB</span></div>').join("");});
async function extract(f){
const ext=(f.name.split(".").pop()||"").toLowerCase();
if(ext==="txt")return await f.text();
if(ext==="docx"){if(!window.mammoth)throw new Error("The DOCX reader did not load. Check your internet connection and reload.");const x=await mammoth.extractRawText({arrayBuffer:await f.arrayBuffer()});return x.value||"";}
if(ext==="pdf"){if(!window.pdfjsLib)throw new Error("The PDF reader did not load. Check your internet connection and reload.");const pdf=await pdfjsLib.getDocument({data:await f.arrayBuffer()}).promise;let parts=[];for(let p=1;p<=pdf.numPages;p++){const page=await pdf.getPage(p),txt=await page.getTextContent();parts.push(txt.items.map(x=>x.str).join(" "));}let result=parts.join("\n");if(result.replace(/\s/g,"").length<60&&window.Tesseract){const worker=await Tesseract.createWorker("eng");try{let scanned=[];for(let p=1;p<=Math.min(pdf.numPages,35);p++){const page=await pdf.getPage(p),viewport=page.getViewport({scale:1.7}),canvas=document.createElement("canvas"),ctx=canvas.getContext("2d");canvas.width=viewport.width;canvas.height=viewport.height;await page.render({canvasContext:ctx,viewport}).promise;const ocr=await worker.recognize(canvas);scanned.push(ocr.data.text||"");}result=scanned.join("\n");}finally{await worker.terminate();}}return result;}
throw new Error("Unsupported document: "+f.name+". Use PDF, DOCX or TXT.");
}
function cleanText(s){return String(s||"").replace(/\u0000/g,"").replace(/[ \t]+/g," ").replace(/\n{3,}/g,"\n\n").trim();}
function readDataUrl(file){return new Promise((resolve,reject)=>{const reader=new FileReader();reader.onload=()=>resolve(String(reader.result));reader.onerror=()=>reject(new Error("Could not read image: "+file.name));reader.readAsDataURL(file);});}
$("workPhotos").addEventListener("change",async e=>{const files=Array.from(e.target.files||[]);$("photoList").innerHTML='<div class="col-12 small text-primary">Loading selected photos…</div>';state.userImages=[];try{for(const file of files){if(!file.type.startsWith("image/"))continue;const data=await readDataUrl(file);state.userImages.push({name:file.name,data,caption:file.name.replace(/\.[^.]+$/,"").replace(/[_-]+/g," ")});}renderPhotoList();}catch(err){$("photoList").textContent=err.message;}});
function renderPhotoList(){$("photoList").innerHTML=state.userImages.map((im,i)=>'<div class="col-6 col-md-4"><div class="border rounded-3 p-2 h-100"><img src="'+im.data+'" alt="" style="width:100%;height:125px;object-fit:cover;border-radius:8px"><label class="form-label small mt-2">Photo caption</label><input class="form-control form-control-sm photo-caption" data-index="'+i+'" value="'+esc(im.caption)+'"><button type="button" class="btn btn-sm btn-outline-danger mt-2 remove-photo" data-index="'+i+'">Remove</button></div></div>').join("");document.querySelectorAll(".photo-caption").forEach(el=>el.addEventListener("input",e=>{state.userImages[+e.target.dataset.index].caption=e.target.value;}));document.querySelectorAll(".remove-photo").forEach(el=>el.addEventListener("click",e=>{state.userImages.splice(+e.target.dataset.index,1);renderPhotoList();}));}
function linesOf(s){return cleanText(s).split(/\r?\n/).map(x=>x.trim()).filter(Boolean);}
function detectHeadings(text){
const ls=linesOf(text),out=[];
const re=/^(chapter\s+[0-9ivx]+|[0-9]+(?:\.[0-9]+){0,3}\s+|[A-Z][A-Z\s:&/()\-]{5,90}$|abstract|acknowledg(e)?ments?|declaration|table of contents|references|appendices|conclusion|recommendations)/i;
for(const line of ls){if(line.length<5||line.length>105)continue;if(re.test(line)&&!out.some(x=>x.toLowerCase()===line.toLowerCase()))out.push(line);}
return out.slice(0,45);
}
function parseActivities(text){
let raw=linesOf(text),items=[];
const skip=/^(requirements?|review of activities|activities performed|tasks performed|work performed|logbook|industrial training|field training|report writing|objectives?|specific objectives?|general objectives?|chapter|table of contents|references|appendices|conclusion|recommendations|student name|registration number|company name|department|supervisor|date|week\s+\d+)/i;
for(let line of raw){
line=line.replace(/^[\s•●▪◦\-–—*]+/,"").replace(/^\d+[\).:\-]\s*/,"").replace(/^[a-z][\).]\s*/i,"").trim();
if(line.length<18||line.length>280||skip.test(line))continue;
if(/^(page\s+\d+|university of|college of|department of|submitted to|prepared by)/i.test(line))continue;
if(/^(the student|this report|the following|during the training|industrial training report)/i.test(line)&&line.length<55)continue;
if(items.some(x=>x.toLowerCase()===line.toLowerCase()))continue;
items.push(line);
}
if(items.length===0){
const paras=cleanText(text).split(/\n{2,}|(?<=[.!?])\s+(?=[A-Z])/).map(x=>x.trim()).filter(x=>x.length>=35&&x.length<=260);
items=paras.slice(0,18);
}
return items.slice(0,24);
}
function inferSubject(text){
const ls=linesOf(text).filter(x=>x.length>12&&x.length<130);
const bad=/^(chapter|table of contents|university|declaration|acknowledg|abstract|introduction|references|requirements|review of activities)/i;
return ls.find(x=>!bad.test(x))||"Industrial Training and Workplace Activities";
}
function setProgress(v,msg){$("progress").style.width=v+"%";$("status").textContent=msg;}
$("go2").onclick=()=>{const b=$("go2");if(!state.ref1||!state.ref2){$("uploadStatus").textContent="Please select both reference reports before continuing.";return;}b.disabled=true;b.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Opening next step…';$("uploadStatus").textContent="Both reference reports are ready. Moving to the activity document…";setTimeout(()=>{show(2);b.disabled=false;b.innerHTML='Continue <i class="bi bi-arrow-right ms-1"></i>';},250);};
$("back1").onclick=()=>show(1);
$("go3").onclick=()=>{const b=$("go3");if(!state.req){alert("Please upload the activity-review / requirements document. This is the factual source for the report.");return;}b.disabled=true;b.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Opening next step…';setTimeout(()=>{show(3);b.disabled=false;b.innerHTML='Continue <i class="bi bi-arrow-right ms-1"></i>';},250);};
$("back2").onclick=()=>show(2);
$("back3").onclick=()=>show(3);
$("analyse").onclick=async()=>{
const btn=$("analyse");btn.disabled=true;btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Reading documents…';show(4);setProgress(5,"Opening both reference reports…");
try{
const r1=await extract(state.ref1);setProgress(25,"Reading the second reference report…");const r2=await extract(state.ref2);
setProgress(45,"Extracting the activities and requirements…");const rq=await extract(state.req);
state.refTexts=[r1,r2];state.activityText=cleanText(rq);state.sourceNames=[state.ref1.name,state.ref2.name,state.req.name];
for(const f of state.extras){if(f.type.startsWith("image/"))continue;try{state.activityText+="\n\n"+cleanText(await extract(f));state.sourceNames.push(f.name);}catch(e){console.warn(e);}}
state.structure=detectHeadings(r1);const second=detectHeadings(r2);if(state.structure.length<5)state.structure=second;
state.activities=parseActivities(rq);
if(state.activities.length===0)state.activities=parseActivities(state.activityText);
setProgress(80,"Comparing report structures and checking activity coverage…");
$("structureList").innerHTML=state.structure.length?state.structure.map((x,i)=>'<div class="mb-1"><span class="text-primary fw-bold">'+(i+1)+'.</span> '+esc(x)+'</div>').join(""):"The reference headings could not be read clearly. A standard academic report structure will be used.";
$("activitiesList").innerHTML=state.activities.length?state.activities.map((x,i)=>'<div class="mb-2"><span class="activity-chip">'+(i+1)+". "+esc(x)+'</span></div>').join(""):"No separate task statements were detected. The activity document may be scanned; provide a text-based PDF/DOCX or type the activity details in the additional facts box.";
$("sourcePreview").textContent=state.activityText.slice(0,6500)+(state.activityText.length>6500?"\n\n[Preview shortened; full extracted text is retained for report generation.]":"");
$("build").disabled=state.activities.length===0&&!$("extraFacts").value.trim();
setProgress(100,"Analysis complete. The sample reports will be used for layout only; the activity-review document will supply the report's actual tasks.");
}catch(e){setProgress(0,"Could not analyse the uploaded documents: "+e.message);alert(e.message);show(3);}
finally{btn.disabled=false;btn.innerHTML='Analyse documents <i class="bi bi-search ms-1"></i>';}
};
function val(id,fallback){return ($(id).value||"").trim()||fallback||"";}
function sentence(s){s=String(s||"").trim();return s?(/[.!?]$/.test(s)?s:s+"."):"";}
function paragraphsFrom(text){return cleanText(text).split(/\n{2,}/).map(x=>x.trim()).filter(x=>x.length>25);}
function makePage(title,html,opts){
opts=opts||{};let cls=opts.cover?"cover-center":"";
return '<section class="report-page '+cls+'">'+(opts.cover?html:'<h2>'+esc(title)+'</h2>'+html)+'<div class="page-number"></div></section>';
}
function p(text){return "<p>"+esc(text)+"</p>";}
function sourceImage(term){
const q=encodeURIComponent("filetype:bitmap "+term);
return fetch("https://commons.wikimedia.org/w/api.php?action=query&generator=search&gsrsearch="+q+"&gsrnamespace=6&gsrlimit=2&prop=imageinfo&iiprop=url|extmetadata&iiurlwidth=1100&format=json&origin=*")
.then(r=>r.json()).then(j=>{
const pages=Object.values((j.query&&j.query.pages)||{});const it=pages.find(x=>x.imageinfo&&x.imageinfo[0]&&x.imageinfo[0].thumburl);
if(!it)return null;const info=it.imageinfo[0],meta=info.extmetadata||{};
return {url:info.thumburl||info.url,source:info.descriptionurl||info.url,title:it.title||term,artist:(meta.Artist&&meta.Artist.value||"").replace(/<[^>]*>/g,"").slice(0,180),license:(meta.LicenseShortName&&meta.LicenseShortName.value)||"Wikimedia Commons"};
}).catch(()=>null);
}
function imageQueryFor(task){
const t=task.toLowerCase();
if(/rj.?45|ethernet|patch panel/.test(t))return "RJ45 Ethernet connector cable";
if(/router|routing|gateway/.test(t))return "computer network router";
if(/spanner|wrench|screwdriver|pliers|tool kit|hand tool/.test(t))return "network technician hand tools spanner wrench screwdriver";
if(/ladder|ceiling|overhead|cable tray/.test(t))return "technician ladder installing network cabling";
if(/crimp|crimping|cable termination|rj.?45/.test(t))return "RJ45 crimping tool Ethernet cable";
if(/tester|cable test|network test/.test(t))return "Ethernet LAN cable network tester";
if(/switch|vlan/.test(t))return "Ethernet network switch";
if(/wireless|wi.?fi|access point/.test(t))return "wireless network access point";
if(/ip address|dhcp|dns|subnet/.test(t))return "computer network topology diagram";
if(/server|rack|data centre/.test(t))return "network server rack";
if(/computer|desktop|hardware|laptop/.test(t))return "computer hardware workstation";
if(/printer/.test(t))return "office network printer";
if(/fibre|fiber|optical/.test(t))return "fiber optic cable connector";
if(/security|firewall|cyber/.test(t))return "network firewall security";
return task+" information technology";
}
function categoryText(task){
const t=task.toLowerCase();
if(/rj.?45|ethernet|patch panel/.test(t))return {name:"Physical network connectivity and structured cabling",purpose:"Physical network connectivity provides the transmission path through which data travels between end devices and network infrastructure. Ethernet cabling, connectors and termination points must be selected, installed and checked carefully because faults at the physical layer can interrupt otherwise correctly configured services.",principles:"A sound cabling process considers the cable category, connector compatibility, pin arrangement, bend radius, cable length, labelling and protection from physical damage. Where twisted-pair Ethernet is used, consistent termination and appropriate cable testing help identify open pairs, shorts, split pairs and wiring errors. RJ45 is the common eight-position modular connector associated with many copper Ethernet patch leads.",practice:"The activity record identifies the work as: "+task+". The recorded task connects the student with the physical layer of networking. Its practical importance lies in the quality of the connection between network devices, the reliability of the transmission path and the role of inspection and testing in confirming a usable link.",learning:"This area connects networking theory with physical installation practice. It demonstrates why a technician must inspect materials, follow a consistent termination method, verify link status and document the connection. It also reinforces the need to distinguish a physical-link problem from an addressing, routing or application-level fault."};
if(/spanner|wrench|screwdriver|pliers|tool kit|hand tool/.test(t))return {name:"Networking installation tools and equipment",purpose:"Networking installation and maintenance may require suitable hand tools such as spanners, adjustable wrenches, screwdrivers, pliers, cable cutters and crimping tools. The correct tool depends on the equipment and task. Using an appropriate tool helps reduce damage to connectors, mounting hardware and equipment enclosures.",principles:"Tools should be inspected before use, selected to match the fastener or connector, handled according to safety instructions and returned to their proper storage location. Electrical equipment should be isolated where required, and technicians should avoid forcing fittings or using damaged tools.",practice:"The activity recorded in the supplied review is: "+task+". The discussion explains the role of suitable tools in carrying out the recorded work. The report does not assume a particular brand, size or model unless the trainee supplies that information.",learning:"The activity reinforces tool selection, safe handling, equipment care and the importance of preparing the correct tools before beginning installation or maintenance."};
if(/ladder|ceiling|overhead|cable tray/.test(t))return {name:"Use of ladders during network installation",purpose:"Ladders may be used when technicians need to access elevated cable routes, ceiling spaces, access points, cable trays or equipment mounted above normal working height. Safe access is an important part of structured cabling and network installation work.",principles:"A ladder should be inspected for damage, placed on a stable and level surface, secured where necessary and used in accordance with workplace safety procedures. The user should maintain safe contact, avoid overreaching and obtain assistance for tasks requiring additional support. Work at height must follow the host organisation's safety rules.",practice:"The activity review records: "+task+". This report describes the general purpose and safety considerations of ladder use without claiming a particular height, ladder type or installation outcome that was not recorded.",learning:"The activity highlights working-at-height awareness, hazard identification, correct equipment selection and the need to prioritise personal and workplace safety during network installations."};
if(/crimp|crimping|cable termination|rj.?45/.test(t))return {name:"Ethernet cable preparation and RJ45 termination",purpose:"Ethernet cable termination prepares twisted-pair cable ends so that network devices can be connected through compatible modular plugs or structured cabling outlets. Correct termination supports reliable physical connectivity.",principles:"The process may involve measuring and stripping the cable jacket, arranging conductors according to the selected wiring standard, trimming them evenly, inserting them fully into the connector and using a compatible crimping tool. A cable tester can be used to verify continuity and wiring order. The actual standard and test result should be recorded only when confirmed.",practice:"The documented task is: "+task+". The activity is relevant to preparing and checking copper Ethernet connections. The report explains the technical principles without inventing a wiring standard or test result that was not provided.",learning:"This task develops practical awareness of cable construction, connector compatibility, careful workmanship and the value of testing completed connections."};
if(/tester|cable test|network test/.test(t))return {name:"Network cable testing and verification",purpose:"Cable testing is used to check whether a physical network cable has been wired and connected correctly. Basic testers can identify continuity and common wiring faults, while more advanced instruments may measure additional cable performance characteristics.",principles:"Testing should use an appropriate instrument and compatible adapters. Results must be interpreted according to the tester instructions and the cable specification. A report should state the actual test result only when it has been observed and recorded.",practice:"The activity review records: "+task+". This task is discussed in relation to checking the condition and reliability of network cabling. No unsupported test readings or pass/fail outcomes are assumed.",learning:"The activity strengthens understanding of verification, fault identification, safe instrument use and the importance of recording test outcomes accurately."};
if(/router|routing|gateway/.test(t))return {name:"Router operation and network communication",purpose:"A router forwards Internet Protocol packets between different IP networks. It examines destination addressing information and uses its routing information to select an appropriate next hop or outgoing interface. In an organisation, routers commonly connect a local network to another site, a service provider or the internet.",principles:"Router operation depends on correct interface addressing, routing information, default routes and, where applicable, network address translation and access-control rules. Configuration changes can affect many users, so they should be authorised, documented and tested using the organisation's approved change process.",practice:"The activity recorded for this report is: "+task+". This statement is used as the factual description of the work. The task is relevant to the operation of routers and the communication between networks. The activity record provides the practical context for the discussion.",learning:"The activity relates to the role of routers in connecting networks and the importance of checking both local and remote connectivity. It highlights careful configuration management, security awareness and systematic troubleshooting."};
if(/switch|vlan/.test(t))return {name:"Switching and local area network connectivity",purpose:"An Ethernet switch connects devices within a local area network and forwards frames using learned Media Access Control addresses. Switching helps devices communicate efficiently within the same network segment and provides the physical ports through which workstations, printers, servers and other devices may connect.",principles:"A managed switch may support VLANs, trunk links, port security, spanning-tree features and monitoring. These functions help administrators organise traffic and maintain a stable network. The actual features used depend on the model and the configuration authorised by the organisation.",practice:"The reviewed activity is: "+task+". The activity is relevant to local network connectivity, device communication and the role of switching in an organisational network. The practical account is based on the participation recorded in the source.",learning:"This activity strengthens understanding of local network design, port connectivity and the importance of identifying the correct physical and logical network path when supporting users."};
if(/wireless|wi.?fi|access point/.test(t))return {name:"Wireless networking and access point support",purpose:"Wireless local area networks allow supported devices to communicate through radio links rather than a direct Ethernet cable. A wireless access point bridges wireless clients to the wired network and provides coverage in the areas where users need connectivity.",principles:"Wireless performance depends on access-point placement, signal strength, interference, channel selection, client density and building materials. Security is also essential: authentication and encryption settings should follow organisational policy, and credentials must never be disclosed in a report.",practice:"The activity identified in the source is: "+task+". The activity illustrates wireless support in the context of the recorded work, including the relationship between coverage, security and user experience.",learning:"The task illustrates the importance of coverage, security and user experience in wireless environments. It also shows why a technician should distinguish weak radio coverage from problems involving IP addressing, authentication or upstream internet connectivity."};
if(/ip address|dhcp|dns|subnet/.test(t))return {name:"IP addressing and network services",purpose:"IP addressing enables devices to identify one another and exchange packets across interconnected networks. IPv4 addresses are commonly used with subnet masks or prefix lengths to identify the network portion and the host portion of an address.",principles:"DHCP can automatically provide clients with addressing parameters such as an IP address, subnet mask, default gateway and DNS server. DNS translates human-readable domain names into records used by network applications. Incorrect addressing, gateway or DNS settings can cause different types of connectivity failure.",practice:"The activity recorded in the requirements document is: "+task+". The activity links addressing concepts with the practical process of checking a device's network configuration and identifying whether a problem concerns local addressing, name resolution or communication beyond the local network.",learning:"This work links theoretical addressing concepts to the practical process of checking a device's network configuration and identifying whether a problem concerns local addressing, name resolution or communication beyond the local network."};
if(/troubleshoot|connectivity|internet|network problem|fault/.test(t))return {name:"Network troubleshooting and technical support",purpose:"Network troubleshooting is a structured process used to identify the cause of a service interruption and restore normal operation. A disciplined approach reduces unnecessary configuration changes and helps technicians distinguish symptoms from the underlying cause.",principles:"A typical method begins with gathering information from the user, defining the scope of the problem, checking power and physical links, examining the device's configuration, testing local and remote reachability, considering name resolution and escalating when required. Each action should be documented.",practice:"The activity review identifies this task: "+task+". The activity demonstrates the value of a systematic troubleshooting approach, including the identification of symptoms, the examination of possible causes and the communication of the outcome.",learning:"The activity develops analytical thinking, communication with users and a repeatable approach to technical problem solving. It reinforces the importance of recording symptoms, actions and outcomes clearly."};
if(/install|software|application|operating system/.test(t))return {name:"Computer system and software support",purpose:"Computer system support helps maintain the availability and usability of workstations and applications. Installation and maintenance activities should follow organisational licensing, compatibility, security and change-control requirements.",principles:"Before software is installed or updated, a technician should confirm the authorised requirement, check system compatibility, use a trusted source, consider user data and verify that the application functions as expected. Administrative permissions should be used only when required.",practice:"The activity listed in the reviewed document is: "+task+". The narrative does not invent software names, licence information, version numbers or installation results that were not supplied. The discussion is based on the details recorded by the trainee and confirmed through the placement record.",learning:"This work demonstrates the relationship between user requirements, system compatibility, secure installation and post-installation verification."};
return {name:"Technical activity and workplace practice",purpose:"The task forms part of the practical responsibilities recorded during the industrial training placement. Its significance is understood in relation to the organisation's operational needs, the users or systems it supports and the technical knowledge required to complete it safely.",principles:"A professional technical task normally requires understanding the objective, confirming authorisation, selecting appropriate tools, following an established procedure, checking the outcome and recording relevant information. The exact technical method depends on the task and the organisation's equipment and policies.",practice:"The activity-review document records the following work: "+task+". This is the factual basis used in this section. The report expands the technical context and explains the relevance of the activity without adding unsupported device models, measurements, configurations, incidents or results.",learning:"The activity contributes to practical understanding by connecting a real workplace responsibility with the concepts, methods and professional standards relevant to the student's programme. It also highlights the value of careful communication, safe working practices and accurate documentation."};
}
function makeReport(){
const detailedNotes=cleanText(val("activityDetails",""));
const author=val("author","[Student name]"),reg=val("reg","[Registration number]"),inst=val("institution","[Institution]"),college=val("college","[College / faculty]"),dept=val("department","[Department / programme]"),course=val("course","[Course code]"),company=val("company","[Host organisation]"),unit=val("unit","[Department / unit]"),loc=val("location","[District and region]"),period=val("period","[Training period]"),cs=val("companySupervisor","[Company supervisor]"),as=val("academicSupervisor","[Academic supervisor]"),year=val("year",String(new Date().getFullYear())),type=val("rType","Industrial Training Report"),subject=val("rTitle",inferSubject(state.activityText)),facts=val("extraFacts","");
const tasks=state.activities.slice(0,24);const grouped=tasks.length>12?tasks.slice(0,11).concat(["Additional documented activities: "+tasks.slice(11).join("; ")]):tasks;
const refChapters=state.structure.filter(x=>/^(chapter\s|[1-5]\.0?\s)/i.test(x));const chapterName=(i,fallback)=>refChapters[i]||fallback;
const lang=val("lang","English");
const pages=[];
pages.push(makePage("Cover page",'<div style="padding-top:15mm"><p class="cover-center"><b>THE UNITED REPUBLIC OF TANZANIA</b></p><p class="cover-center"><b>'+esc(inst.toUpperCase())+'</b></p><p class="cover-center"><b>'+esc(college.toUpperCase())+'</b></p><div class="cover-gap"></div><p class="cover-center" style="font-size:13pt">[INSTITUTION LOGO]</p><p class="cover-center"><b>'+esc(dept.toUpperCase())+'</b></p><div class="cover-gap"></div><p class="cover-center cover-title">'+esc(type.toUpperCase())+'</p><p class="cover-center"><b>At</b></p><p class="cover-center"><b>'+esc(unit)+'</b></p><p class="cover-center"><b>'+esc(company)+'</b></p><p class="cover-center">'+esc(loc)+'</p><div style="height:18px"></div><p class="cover-center"><b>BY</b></p><p class="cover-center"><b>Student Name:</b> '+esc(author)+'</p><p class="cover-center"><b>Registration Number:</b> '+esc(reg)+'</p><p class="cover-center"><b>Course Code:</b> '+esc(course)+'</p><p class="cover-center"><b>Degree Programme:</b> '+esc(dept)+'</p><div style="height:12px"></div><p class="cover-center"><b>SUBMITTED TO</b></p><p class="cover-center">'+esc(as)+'</p><p class="cover-center"><b>ACADEMIC YEAR: '+esc(year)+'</b></p></div>',{cover:true}));
pages.push(makePage("Declaration",p("I, "+author+", declare that this report is an account of the industrial training undertaken at "+company+" during "+period+". The report has been prepared from the activity records and supporting information made available for this placement. The descriptions of tasks are based on the activity-review document supplied for this report, while external technical sources and image collections are acknowledged in the references and figure captions.")+p("I further declare that confidential information, private credentials and restricted organisational data have not been intentionally disclosed in this report.")+'<p style="margin-top:35px">Student signature: ____________________________________</p><p>Date: _______________________________________________</p><p>Name: '+esc(author)+'</p>'));
pages.push(makePage("Acknowledgement",p("I wish to express my sincere appreciation to the management and staff of "+company+" for providing the opportunity to undertake industrial training within "+unit+". The workplace exposure created an opportunity to observe professional responsibilities and relate academic knowledge to the practical requirements of an operating organisation.")+p("I am grateful to the company supervisor, "+cs+", and the staff members who provided explanations, guidance and support during the training period. Their contribution helped me understand the working environment and the importance of responsible technical practice.")+p("I also acknowledge the academic guidance provided by "+as+" and the support of "+inst+" throughout the training process. Finally, I appreciate everyone who contributed to the completion of the training and preparation of this report.")));
const summary="This report presents the industrial training undertaken by "+author+" at "+company+" in the "+unit+" from "+period+". The report is based on two completed report examples used solely to identify the expected structure and presentation, together with the activity-review document that records the work undertaken. The placement exposed the student to the following documented areas: "+tasks.slice(0,7).join("; ")+". The report explains the organisational context, the purpose and technical relevance of the recorded activities, the knowledge and skills developed, and the professional considerations associated with workplace practice. Relevant technical illustrations have been selected from Wikimedia Commons and placed beside the topics they explain, with source attribution. The discussion distinguishes documented activities from general technical background and does not invent measurements, equipment models, configurations or results absent from the source records. The report concludes with recommendations for the host organisation, the University and future trainees.";
pages.push(makePage("Summary",p(summary)));
const tocItems=["Declaration","Acknowledgement","Summary","List of Abbreviations","List of Tables and Figures",chapterName(0,"CHAPTER ONE: INTRODUCTION"),"1.1 Background of Industrial Training","1.2 Purpose and Objectives","1.3 Scope and Organisation of the Report",chapterName(1,"CHAPTER TWO: ORGANISATION PROFILE"),"2.1 Host Organisation","2.2 Department and Working Environment",chapterName(2,"CHAPTER THREE: ACTIVITIES PERFORMED"),"3.1 Overview of Practical Activities"].concat(grouped.map((x,i)=>"3."+(i+2)+" "+x),chapterName(3,"CHAPTER FOUR: KNOWLEDGE AND SKILLS ACQUIRED"),"4.1 Technical Knowledge","4.2 Professional Skills and Ethics","4.3 Challenges and Learning",chapterName(4,"CHAPTER FIVE: CONCLUSION AND RECOMMENDATIONS"),"References","Appendices");
pages.push(makePage("Table of Contents",'<ol>'+tocItems.map(x=>'<li>'+esc(x)+'</li>').join("")+'</ol><p class="smallnote">The page sequence follows the report body generated below.</p>'));
const abbr=[["ICT","Information and Communication Technology"],["IP","Internet Protocol"],["LAN","Local Area Network"],["WAN","Wide Area Network"],["WLAN","Wireless Local Area Network"],["DHCP","Dynamic Host Configuration Protocol"],["DNS","Domain Name System"],["RJ45","Registered Jack 45 connector"],["VLAN","Virtual Local Area Network"],["MAC","Media Access Control"]];
pages.push(makePage("List of Abbreviations, Tables and Figures",'<h3>List of Abbreviations</h3><table><tr><th>Abbreviation</th><th>Meaning</th></tr>'+abbr.map(a=>'<tr><td>'+esc(a[0])+'</td><td>'+esc(a[1])+'</td></tr>').join("")+'</table><h3>List of Tables</h3><ol><li>Summary of activities recorded in the activity-review document</li><li>Relationship between practical activities and competencies</li></ol><h3>List of Figures</h3><ol>'+grouped.map((x,i)=>'<li>Technical illustration relating to '+esc(x)+'</li>').join("")+'</ol>'));
pages.push(makePage(chapterName(0,"CHAPTER ONE: INTRODUCTION"),'<h3>1.1 Background of Industrial Training</h3>'+p("Industrial training is an important part of university education because it enables students to experience how knowledge and skills are applied in an actual working environment. Academic study introduces theories, principles and methods, while workplace learning exposes students to organisational procedures, professional responsibilities, practical constraints and the expectations of service users. The experience is particularly valuable in information and communication technology because organisations rely on computer systems, networks and digital services to support communication, information management and daily operations.")+p("The placement at "+company+" provided an opportunity to become familiar with the work environment of "+unit+". The training period, "+period+", formed a practical setting in which the activities documented in the activity-review material could be understood in relation to the organisation's operational needs. The report therefore combines a description of the host organisation with an account of the recorded tasks and the learning associated with them.")));
pages.push(makePage("Purpose, Objectives and Scope",'<h3>1.2 Purpose of the Training</h3>'+p("The purpose of the placement was to strengthen the connection between academic learning and practical workplace experience. It provided an opportunity to observe professional work, participate in the activities assigned to the trainee and develop an understanding of how technical responsibilities are organised, supervised and evaluated.")+'<h3>1.3 Objectives</h3><ul><li>To gain practical exposure to the working environment of '+esc(company)+'.</li><li>To understand the responsibilities and procedures of '+esc(unit)+'.</li><li>To relate relevant academic concepts to the activities documented during the placement.</li><li>To develop technical, communication, teamwork and problem-solving skills.</li><li>To understand the importance of professional ethics, safety and confidentiality.</li><li>To reflect on challenges and identify opportunities for improvement.</li></ul><h3>1.4 Scope and Organisation of the Report</h3>'+p("The report covers the organisation and department of attachment, the activities identified in the supplied review document, the technical knowledge associated with those activities, the skills acquired and recommendations arising from the training experience. It is organised into five chapters, followed by references and supporting appendices.")));
pages.push(makePage(chapterName(1,"CHAPTER TWO: HOST ORGANISATION PROFILE"),'<h3>2.1 Host Organisation</h3>'+p(company+" hosted the industrial training placement during "+period+". The student was attached to "+unit+" at the organisation's location in "+loc+". The organisation's working environment is considered in relation to the department of attachment, the services it supports and the practical responsibilities recorded during the training period.")+p("The organisation's operating environment provides the context in which its staff carry out their responsibilities and deliver services to customers or internal users. The department to which a trainee is attached contributes to these activities through its assigned functions, communication with other units and compliance with organisational procedures.")+'<h3>2.2 Training Placement</h3>'+p("The student was attached to "+unit+" and worked under the guidance of "+cs+". Academic oversight was provided by "+as+". The placement period was "+period+". The activity-review document forms the principal record of the tasks discussed in Chapter Three. Where detailed organisational facts are not available, they are not replaced with assumptions or generic claims about the company.")));
pages.push(makePage("Department and Working Environment",'<h3>2.3 Department of Attachment</h3>'+p("The "+unit+" is the department identified for the student's placement at "+company+". The department operates within the organisation's reporting structure and contributes to the delivery of its services. In an ICT or networking environment, departmental work may involve maintaining access to digital resources, supporting users, monitoring equipment, documenting technical work and escalating issues that require specialised attention. The activities described in this report reflect the work recorded in the supplied activity-review document.")+'<h3>2.4 Working Environment and Professional Procedures</h3>'+p("A professional technical environment requires staff and trainees to follow established reporting lines, protect organisational information, use equipment responsibly and obtain permission before making changes to systems. Technical work is normally carried out with attention to service continuity, safety, accuracy and documentation. These principles are relevant to the placement because the value of a technical task depends not only on the immediate action but also on whether it is performed responsibly and recorded clearly.")+p("The trainee's work was guided by the responsibilities of the host department and the supervision arrangements identified above. Coordination between technical staff and other organisational units supports service continuity and helps ensure that user requirements are addressed through the appropriate channels.")));
pages.push(makePage(chapterName(2,"CHAPTER THREE: ACTIVITIES PERFORMED"),'<h3>3.1 Overview of Practical Activities</h3>'+p("This chapter discusses the practical activities identified in the activity-review document. The two sample reports were not used as sources of factual content; they were examined only to determine the expected report structure and writing presentation. Each activity is discussed in terms of its technical purpose, relevant concepts, workplace application and learning value. The account does not add exact equipment models, command output, network addresses, measurements or repair outcomes unless those details were contained in the activity source.")+p("The activities are presented separately to show the relationship between each task, the technical knowledge involved and the workplace responsibilities associated with it.")));
for(let i=0;i<grouped.length;i++){
const task=grouped[i],c=categoryText(task),im=state.images[i]||null;
let fig=im?'<figure><img src="'+esc(im.url)+'" alt="'+esc(c.name)+'"><figcaption>Figure 3.'+(i+1)+': '+esc(c.name)+'. Source: Wikimedia Commons, '+esc(im.title)+'. '+esc(im.license)+'.</figcaption></figure>':'';
let text1='<h3>3.'+(i+2)+' '+esc(c.name)+'</h3>'+p("The activity review records the following task: "+task+". This task is discussed as part of the student's practical exposure at "+company+". Its inclusion in the report is based on the supplied activity record rather than on the example reports, which were used only to identify the format.")+p(c.purpose)+p(c.principles)+p(c.practice);
let text2=p(c.learning)+p("In carrying out work of this nature, technical accuracy must be supported by appropriate supervision, safe handling of equipment and respect for organisational procedures. The trainee should understand the objective of the task before beginning, clarify unfamiliar instructions and seek assistance when a task falls outside the trainee's authority or competence. These practices reduce the likelihood of avoidable errors and help maintain continuity of service.")+p("The activity statement provides the factual basis for the discussion. The technical explanation places the work in its wider operational context and shows how the activity contributes to reliable ICT services.")+fig;
pages.push(makePage("Activity "+(i+1),text1));
if(grouped.length<=3){
pages.push(makePage("Technical discussion and learning: "+c.name,text2));
pages.push(makePage("Work process and technical considerations: "+c.name,p("The practical value of "+task+" can be understood by examining the objective of the work, the resources involved and the checks relevant to the task. The work record identifies this activity as part of the student's placement in "+unit+" at "+company+". Its place in the wider technical environment is important because individual support and maintenance tasks contribute to the reliability of organisational services.")+p("A sound approach to this type of work begins with understanding the requirement and confirming the scope of the assigned responsibility. The trainee works within the supervision and authorisation arrangements of the host organisation, uses appropriate tools and follows the procedures relevant to the equipment or service. Checks are selected according to the nature of the task, and the outcome is communicated to the responsible staff member or user.")+p("The task also demonstrates the relationship between technical accuracy and service quality. An action that appears small may affect access to information, communication or the availability of a shared resource. For that reason, careful handling, clear communication and accurate records are important parts of technical practice.")));
pages.push(makePage("Professional learning from the activity: "+c.name,p("Through exposure to "+task+", the student had an opportunity to connect the practical work with the technical concepts associated with "+c.name.toLowerCase()+". The experience supports the development of observation, analysis and an appreciation of the steps required to complete technical work in an organised environment.")+p("The activity also illustrates the importance of working responsibly. Technical staff must respect organisational procedures, protect information, use equipment appropriately and seek guidance when a task requires knowledge or authority beyond their current role. These professional behaviours support safe and dependable service delivery.")+p("The knowledge associated with this activity is relevant to future work because it provides a foundation for understanding related systems, identifying possible causes of technical problems and communicating clearly with colleagues. The practical experience therefore contributes to both technical competence and professional maturity.")));
}
}
const skillsText=p("The activities documented in Chapter Three provided a basis for developing technical understanding and practical awareness. The competencies developed through the placement are connected to the tasks undertaken and the student's participation in the work. The relationship between each task and its associated knowledge is important because it shows how academic concepts can be applied in a real organisational environment.")+p("Technical learning in an ICT environment may involve understanding how physical devices, network services, software and users interact. For example, a connectivity task may require attention to the physical link, device configuration and network services, while a user-support task may require listening carefully, reproducing the reported problem, documenting checks and explaining the outcome. The activity descriptions in this report identify the areas to which the student was exposed; the exact skills claimed should correspond to the actual work recorded.")+p("The placement also supports the development of transferable skills. These include communicating with colleagues and users, working as part of a team, following instructions, managing time, documenting work and accepting feedback. Such skills are important because technical work is usually performed within a wider service environment where reliability and professional behaviour affect other people.");
pages.push(makePage(chapterName(3,"CHAPTER FOUR: KNOWLEDGE AND SKILLS ACQUIRED"),'<h3>4.1 Technical Knowledge and Practical Understanding</h3>'+skillsText));
pages.push(makePage("Professional Skills, Ethics and Challenges",'<h3>4.2 Communication and Teamwork</h3>'+p("Effective technical support depends on clear communication. A trainee must be able to listen to a user's description, ask relevant questions and communicate progress in language that the user can understand. Teamwork allows tasks to be shared, checked and escalated to personnel with the appropriate experience or authority. The placement provides a setting in which these behaviours can be practised and improved.")+'<h3>4.3 Professional Ethics and Confidentiality</h3>'+p("Professional conduct includes punctuality, honesty, respect, responsible use of organisational resources and protection of confidential information. Access to systems and equipment must be limited to authorised duties. Passwords, private keys, customer records and sensitive network configurations must not be disclosed in an academic report. A trainee should follow the host organisation's policies and ask for permission before carrying out changes that may affect users or services.")+'<h3>4.4 Challenges and Response</h3>'+p("The practical environment can present challenges such as unfamiliar equipment, limited access, service interruptions, time constraints or the need to coordinate work with other staff. These situations demonstrate the value of communication, supervision, documentation and systematic problem solving. The discussion of challenges in this report is based on the placement information supplied and the professional considerations associated with the recorded activities.")+(facts?p(facts):"")));
pages.push(makePage(chapterName(4,"CHAPTER FIVE: CONCLUSION AND RECOMMENDATIONS"),'<h3>5.1 Conclusion</h3>'+p("The industrial training at "+company+" provided the student with an opportunity to experience the working environment of "+unit+" and to relate academic learning to practical responsibilities. The tasks recorded in the activity-review document covered the following areas: "+tasks.slice(0,10).join("; ")+". These activities form the factual basis of the report and demonstrate the range of work to which the student was exposed.")+p("The training experience is valuable because it develops an understanding of technical practice alongside professional conduct, communication, teamwork and documentation. It also demonstrates that successful ICT work requires attention to accuracy, authorisation, confidentiality and the needs of users. The placement therefore contributes to the student's academic and professional development.")+'<h3>5.2 Recommendations to the Host Organisation</h3><ol><li>Continue providing trainees with clear orientation on departmental responsibilities, safety and workplace procedures.</li><li>Where operationally appropriate, provide supervised practical exposure related to each trainee&#39;s academic programme.</li><li>Encourage staff to explain the purpose of tasks and provide constructive feedback to trainees.</li><li>Maintain accurate technical records and equipment documentation to support continuity and troubleshooting.</li></ol><h3>5.3 Recommendations to the University</h3><ol><li>Maintain effective communication with host organisations and academic supervisors throughout the training period.</li><li>Prepare students for workplace expectations, professional ethics and practical reporting before placement.</li><li>Use feedback from host organisations to strengthen the relationship between academic content and workplace requirements.</li></ol>'));
pages.push(makePage("References",'<ol><li>Internet Engineering Task Force. (1981). <i>Internet Protocol (RFC 791)</i>. <a href="https://www.rfc-editor.org/rfc/rfc791">https://www.rfc-editor.org/rfc/rfc791</a>.</li><li>Internet Engineering Task Force. (1997). <i>Dynamic Host Configuration Protocol (RFC 2131)</i>. <a href="https://www.rfc-editor.org/rfc/rfc2131">https://www.rfc-editor.org/rfc/rfc2131</a>.</li><li>Internet Engineering Task Force. (1987). <i>Domain Names – Concepts and Facilities (RFC 1034)</i>. <a href="https://www.rfc-editor.org/rfc/rfc1034">https://www.rfc-editor.org/rfc/rfc1034</a>.</li><li>Cisco Networking Academy. (n.d.). <i>Networking courses and learning resources</i>. <a href="https://www.netacad.com/">https://www.netacad.com/</a>.</li>'+state.images.filter(Boolean).map((im,i)=>'<li>Wikimedia Commons. '+esc(im.title)+'. '+esc(im.license)+'. <a href="'+esc(im.source)+'">'+esc(im.source)+'</a>.</li>').join("")+'</ol><p class="smallnote">The references above support the technical concepts discussed in the report and identify the online sources used for the illustrations.</p>'));
pages.push(makePage("Appendices",'<h3>Appendix A: Activity-review record</h3>'+p("The activity-review document supplied for report preparation is the primary factual source for the practical tasks described in Chapter Three. It records the work areas used to develop the practical discussion in this report.")+'<h3>Appendix B: Supporting evidence</h3>'+p("Supporting evidence associated with the training activities may include approved photographs, diagrams, task sheets, installation records and relevant logbook extracts. Such material complements the practical discussion and provides context for the work recorded.")+'<h3>Appendix C: Training correspondence</h3>'+p("The placement was supported by the organisation and academic supervision arrangements identified in the report particulars. Relevant correspondence and supervisor assessments form part of the administrative record of the training.")+'<h3>Appendix D: Supervisor information</h3>'+p("Company supervisor: "+cs+". Academic supervisor: "+as+".")));
if(detailedNotes){const detailParas=detailedNotes.split(/\n{2,}/).map(x=>x.trim()).filter(Boolean);pages.push(makePage("Additional detailed descriptions of practical work",'<h3>Additional activity descriptions supplied by the trainee</h3>'+detailParas.map(x=>p(x)).join("")));}
if(state.userImages.length){state.userImages.forEach((im,i)=>{const photoHtml='<figure style="margin:10px auto 22px;text-align:center"><img src="'+im.data+'" alt="'+esc(im.caption)+'" style="max-width:100%;max-height:190mm;object-fit:contain"><figcaption>Figure P.'+(i+1)+': '+esc(im.caption)+'. Source: Photograph supplied by the trainee.</figcaption></figure>';pages.push(makePage("Photographic evidence "+(i+1),'<h3>Workplace photograph: '+esc(im.caption)+'</h3>'+photoHtml));});}
return pages.join("");
}
$("build").onclick=async()=>{
const btn=$("build");btn.disabled=true;btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Preparing report and finding illustrations…';show(5);
try{
state.images=[];const tasks=state.activities.slice(0,24),groups=tasks.length>12?tasks.slice(0,11).concat(["Additional documented activities: "+tasks.slice(11).join("; ")]):tasks;
for(let i=0;i<groups.length;i++){const q=imageQueryFor(groups[i]);const im=await sourceImage(q);state.images.push(im);$("reportStats").textContent="Searching online illustrations: "+(i+1)+" of "+groups.length+" topics…";}
$("report").innerHTML=makeReport();
const roman=["i","ii","iii","iv","v","vi","vii","viii","ix","x"];document.querySelectorAll("#report .report-page").forEach((pg,i)=>{const pn=pg.querySelector(".page-number");if(pn)pn.textContent=i===0?"":(i<=5?roman[i-1]:String(i-5));});
const words=$("report").innerText.trim().split(/\s+/).length;const pageCount=document.querySelectorAll("#report .report-page").length;
$("reportStats").innerHTML='<b>Report prepared:</b> '+pageCount+' designed report pages · '+words.toLocaleString()+' words · '+state.activities.length+' activity statements identified · '+state.images.filter(Boolean).length+' relevant online images attached. <span class="text-secondary">The final printed pagination may vary slightly by browser and printer settings.</span>';
window.scrollTo({top:0,behavior:"smooth"});
}catch(e){alert("Report generation failed: "+e.message);show(4);}
finally{btn.disabled=false;btn.innerHTML='<i class="bi bi-file-earmark-richtext me-1"></i>Generate full report';}
};
$("back4").onclick=()=>show(4);
$("rebuild").onclick=()=>$("build").click();
function fullHtml(){return '<!doctype html><html><head><meta charset="utf-8"><title>'+esc(val("rTitle","Industrial Training Report"))+'</title><style>@page{size:A4;margin:0}body{margin:0;font-family:"Times New Roman",serif;color:#202b3a}.report-page{box-sizing:border-box;width:210mm;height:297mm;min-height:297mm;padding:24mm 22mm 22mm 32mm;position:relative;break-after:page;page-break-after:always;overflow:hidden;font-size:12pt;line-height:1.5}.report-page:last-child{break-after:auto;page-break-after:auto}.report-page h1{text-align:center;font-size:16pt;color:#142b50}.report-page h2{font-size:13pt;color:#173b72;border-bottom:1px solid #b9cbe3;padding-bottom:5px}.report-page h3{font-size:12pt;color:#203f70}.report-page p{text-align:justify;margin:0 0 10px}.report-page table{border-collapse:collapse;width:100%;font-size:10pt}.report-page td,.report-page th{border:1px solid #8797aa;padding:6px}.report-page img{max-width:100%;max-height:50mm;object-fit:contain}.page-number{position:absolute;bottom:9mm;left:0;right:0;text-align:center;font-size:9pt}</style></head><body>'+ $("report").innerHTML+'<script>
/* Smooth graduation-photo slideshow: preload first, then crossfade every 3 seconds. */
(function(){
  const hero=document.querySelector(".hero");
  if(!hero)return;
  const photos=[
    "https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1627556704302-624286467c65?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1564981797816-1043664bf78d?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=2000&q=85"
  ];
  let index=0,showB=false;
  hero.style.setProperty("--grad-photo-a",'url("'+photos[0]+'")');
  hero.style.setProperty("--grad-photo-b",'url("'+photos[1]+'")');
  photos.forEach(function(src){const img=new Image();img.src=src;});
  window.setInterval(function(){
    index=(index+1)%photos.length;
    const next=photos[index];
    const preload=new Image();
    preload.onload=function(){
      if(showB){hero.style.setProperty("--grad-photo-a",'url("'+next+'")');hero.classList.remove("photo-b");}
      else{hero.style.setProperty("--grad-photo-b",'url("'+next+'")');hero.classList.add("photo-b");}
      showB=!showB;
    };
    preload.onerror=function(){index=(index+1)%photos.length;};
    preload.src=next;
  },3000);
})();</script>\n</body></html>';}
function saveBlob(blob,filename){const url=URL.createObjectURL(blob),a=document.createElement("a");a.href=url;a.download=filename;a.style.display="none";document.body.appendChild(a);a.click();setTimeout(()=>{a.remove();URL.revokeObjectURL(url);},10000);}
$("downloadHtml").onclick=()=>{try{saveBlob(new Blob([fullHtml()],{type:"application/msword"}),"Raymond-Industrial-Training-Report.doc");$("exportStatus").textContent="Word-compatible report copy prepared. Check your browser Downloads.";}catch(e){$("exportStatus").textContent="Download failed: "+e.message;}};
$("printReport").onclick=()=>{const w=window.open("","_blank");if(!w){$("exportStatus").textContent="Your browser blocked the print window. Allow pop-ups for shizer.kesug.com, or use Download PDF.";return;}w.document.open();w.document.write(fullHtml()+"<script>window.onload=function(){setTimeout(function(){window.print()},1000)};<\/script>");w.document.close();};
$("downloadPdf").onclick=async()=>{const btn=$("downloadPdf");if(!window.html2pdf){$("exportStatus").textContent="PDF library did not load. Check your internet connection, reload the page and try again.";return;}btn.disabled=true;btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Creating PDF…';$("exportStatus").textContent="Preparing report pages for PDF download…";try{await window.html2pdf().set({margin:0,filename:"Raymond-Industrial-Training-Report.pdf",image:{type:"jpeg",quality:0.98},html2canvas:{scale:1.5,useCORS:true,allowTaint:false,backgroundColor:"#ffffff",logging:false},jsPDF:{unit:"mm",format:"a4",orientation:"portrait"},pagebreak:{mode:["css","legacy"]}}).from($("report")).save();$("exportStatus").textContent="PDF export completed. Check your Downloads folder.";}catch(e){console.error(e);$("exportStatus").textContent="PDF export failed: "+e.message+". Use Print / Save PDF as an alternative.";}finally{btn.disabled=false;btn.innerHTML='<i class="bi bi-file-earmark-pdf me-1"></i>Download PDF';}};
$("downloadDocx").onclick=async()=>{
if(!window.docx){alert("The Word document library could not load. Use Download report copy or Print / Save PDF.");return;}
const btn=$("downloadDocx");btn.disabled=true;btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Creating Word document…';
try{
const D=window.docx,children=[];await document.fonts.ready;
const sections=Array.from($("report").querySelectorAll(".report-page"));
for(let pi=0;pi<sections.length;pi++){
const sheet=sections[pi];
for(const node of Array.from(sheet.children)){
if(node.classList&&node.classList.contains("page-number"))continue;
if(node.tagName==="H1"||node.tagName==="H2"||node.tagName==="H3"){
children.push(new D.Paragraph({text:node.innerText,heading:node.tagName==="H1"?D.HeadingLevel.TITLE:node.tagName==="H2"?D.HeadingLevel.HEADING_1:D.HeadingLevel.HEADING_2,alignment:node.tagName==="H1"?D.AlignmentType.CENTER:D.AlignmentType.LEFT,spacing:{after:180}}));
}else if(node.tagName==="P"){
children.push(new D.Paragraph({children:[new D.TextRun({text:node.innerText})],alignment:D.AlignmentType.JUSTIFIED,spacing:{after:130,line:360}}));
}else if(node.tagName==="OL"||node.tagName==="UL"){
let listIndex=0;for(const li of Array.from(node.querySelectorAll(":scope > li"))){listIndex++;children.push(new D.Paragraph({text:(node.tagName==="OL"?listIndex+". ":"")+li.innerText,bullet:node.tagName==="UL"?{indent:360}:undefined,spacing:{after:80}}));}
}else if(node.tagName==="TABLE"){
for(const tr of Array.from(node.rows)){const cells=Array.from(tr.cells).map(td=>new D.TableCell({children:[new D.Paragraph({text:td.innerText})],width:{size:100/Math.max(1,tr.cells.length),type:D.WidthType.PERCENTAGE}}));children.push(new D.Table({rows:[new D.TableRow({children:cells})],width:{size:100,type:D.WidthType.PERCENTAGE}}));}
}else if(node.tagName==="FIGURE"){
const img=node.querySelector("img");if(img){try{let data;if(img.src.startsWith("data:")){const raw=atob(img.src.split(",")[1]);data=Uint8Array.from(raw,c=>c.charCodeAt(0));}else{const response=await fetch(img.src,{mode:"cors"});if(!response.ok)throw new Error("Image download failed");data=new Uint8Array(await response.arrayBuffer());}const mime=img.src.startsWith("data:image/png")?"png":"jpg";children.push(new D.Paragraph({children:[new D.ImageRun({data,transformation:{width:430,height:260},type:mime})],alignment:D.AlignmentType.CENTER}));}catch(e){children.push(new D.Paragraph({text:"[Online illustration: "+(img.alt||"topic image")+"]"}));}}
const cap=node.querySelector("figcaption");if(cap)children.push(new D.Paragraph({text:cap.innerText,alignment:D.AlignmentType.CENTER,spacing:{after:160}}));
}else if(node.tagName==="DIV"){
for(const pnode of Array.from(node.querySelectorAll("p"))){children.push(new D.Paragraph({text:pnode.innerText,alignment:D.AlignmentType.CENTER,spacing:{after:110}}));}
}
}
if(pi<sections.length-1)children.push(new D.Paragraph({children:[new D.PageBreak()]}));
}
const doc=new D.Document({sections:[{properties:{page:{size:{width:11906,height:16838},margin:{top:1417,right:1247,bottom:1417,left:2154}}},children}]});
const blob=await D.Packer.toBlob(doc);saveBlob(blob,"Raymond-Industrial-Training-Report.docx");$("exportStatus").textContent="Word document created successfully. Check your Downloads folder.";
}catch(e){console.error(e);$("exportStatus").textContent="Word export failed: "+e.message+". Try Download report copy or Print / Save PDF.";}
finally{btn.disabled=false;btn.innerHTML='<i class="bi bi-file-earmark-word me-1"></i>Download Word (.docx)';}
};

/* Raymond Report Studio photo rotation: real image layers, preload-before-fade, skip failed URLs. */
(function(){
  const hero=document.querySelector(".hero");
  const stage=hero&&hero.querySelector(".hero-slideshow");
  if(!hero||!stage)return;
  const layers=Array.from(stage.querySelectorAll(".hero-photo"));
  if(layers.length<2)return;
  const photos=[
    "https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1627556704302-624286467c65?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1564981797816-1043664bf78d?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=2000&q=85",
    "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=2000&q=85"
  ];
  let index=0,front=0;
  layers[0].classList.add("is-active");
  layers[1].classList.remove("is-active");
  function rotate(){
    let tries=0;
    function attempt(){
      const next=(index+1)%photos.length;
      if(tries>=photos.length){window.setTimeout(rotate,3000);return;}
      const preload=new Image();
      preload.onload=function(){
        const back=1-front;
        layers[back].src=photos[next];
        layers[back].onload=null;
        requestAnimationFrame(function(){
          layers[back].classList.add("is-active");
          layers[front].classList.remove("is-active");
          front=back;index=next;
          window.setTimeout(rotate,3000);
        });
      };
      preload.onerror=function(){index=next;tries++;attempt();};
      preload.src=photos[next];
    }
    attempt();
  }
  layers.forEach(function(layer){layer.loading="eager";layer.decoding="async";});
  window.setTimeout(rotate,3000);
})();
 
$("startOver").onclick=()=>{if(!confirm("Start a new report? The current report will be cleared."))return;location.reload();};
})();
</script>
</body>
</html>