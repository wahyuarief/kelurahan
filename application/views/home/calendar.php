<section id="single-page-slider" class="no-margin">
<div class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="item active">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">Jadwal Kegiatan</h2>
            </div>
        </div>
    </div>
</div>
</div><!--/.item-->
</div><!--/.carousel-inner-->
</div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">
<section id="blog" class="white">
<div class="container">
<div class="widget categories">
<div class="blog">
<div class="blog-item">
<div class="blog-content">
  <div id="calendar"></div>
</div>
</div>
</div>
</div>
</section><!--/#blog-->
</div>
<script src="<?= base_url('assets/') ?>fullcalendar/lib/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>fullcalendar/fullcalendar.min.js"></script>
<script src="<?= base_url('assets/') ?>fullcalendar/gcal.min.js"></script>
    <script type="text/javascript">
    $('#calendar').fullCalendar({
     eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>jadwal/lihat',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ]
 });
    </script>
