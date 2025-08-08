@extends('layouts.web')

@section('title', 'หน้าหลัก')
@section('content')
    <video width="100%" autoplay loop muted>
        <source src="{{ asset('image/ปกเว็บไซต์/เทศบาลเมืองปากพูนอุโมงค์อเมซอน.mp4') }}" type="video/mp4">
    </video>
    <section>
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-1); font-weight: bold;">ยินดีต้อนรับสู่เว็บไซต์<span
                    style="color: var(--color-4)">เทศบาลเมืองปากพูน</span></h1>
            <p class="text-center">ที่นี่คุณสามารถค้นหาข้อมูลเกี่ยวกับเทศบาลเมืองปากพูนได้อย่างง่ายดาย</p>
        </div><br>
        <nav>
            <div class="nav nav-tabs justify-content-around" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-facebook-tab" data-bs-toggle="tab" data-bs-target="#nav-facebook"
                    type="button" role="tab" aria-controls="nav-facebook" aria-selected="true" style="color: #000">ข่าวสาร
                    Facebook</button>
                <button class="nav-link" id="nav-youtube-tab" data-bs-toggle="tab" data-bs-target="#nav-youtube"
                    type="button" role="tab" aria-controls="nav-youtube" aria-selected="false" style="color: #000">วิดีทัศน์
                    Youtube</button>
                <button class="nav-link" id="nav-tiktok-tab" data-bs-toggle="tab" data-bs-target="#nav-tiktok" type="button"
                    role="tab" aria-controls="nav-tiktok" aria-selected="false" style="color: #000">วิดีโอ Tiktok</button>
                <button class="nav-link" id="nav-line-tab" data-bs-toggle="tab" data-bs-target="#nav-line" type="button"
                    role="tab" aria-controls="nav-line" aria-selected="false" style="color: #000">เรื่องดี ๆ ที่ปากพูน
                    Line</button>

            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-facebook" role="tabpanel" aria-labelledby="nav-facebook-tab"
                tabindex="0">
                <div class="facebook-container">
                    <div>
                        {{-- Pagination logic (ข่าวเด่น) --}}
                        @php
                            $perPage = 4;
                            $newsPage = request()->get('fbnews_page', 1);
                            $total = count($news_facebook);
                            $chunks = collect($news_facebook)->chunk($perPage);
                            $currentItems = $chunks[$newsPage - 1] ?? collect();
                            $totalPages = $chunks->count();
                        @endphp

                        {{-- Show only 4 items per page --}}
                        @foreach ($currentItems as $item)
                            <iframe src="{{ url($item->url) }}" scrolling="no" frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        @endforeach
                    </div>
                    {{-- Pagination buttons --}}
                    <div class="text-center mt-3 justify-content-center">
                        @for ($i = 1; $i <= $totalPages; $i++)
                            <a href="?fbnews_page={{ $i }}#nav-news"
                                class="btn btn-sm {{ $i == $newsPage ? 'btn' : 'btn-outline-dark' }} mx-1">
                                {{ $i }}
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-youtube" role="tabpanel" aria-labelledby="nav-youtube-tab" tabindex="0">
                <div class="youtube-container">
                    {{-- Pagination logic (วิดีทัศน์) --}}
                    @php
                        $ytPerPage = 6;
                        $ytPage = request()->get('youtube_page', 1);
                        $ytTotal = count($news_youtube);
                        $ytChunks = collect($news_youtube)->chunk($ytPerPage);
                        $ytCurrentItems = $ytChunks[$ytPage - 1] ?? collect();
                        $ytTotalPages = $ytChunks->count();
                    @endphp

                    @foreach ($ytCurrentItems as $item)
                        <iframe src="{{  $item->url }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @endforeach
                    <div class="text-center mt-3 justify-content-center">
                        @for ($i = 1; $i <= $ytTotalPages; $i++)
                            <a href="?youtube_page={{ $i }}#nav-youtube"
                                class="btn btn-sm {{ $i == $ytPage ? 'btn' : 'btn-outline-dark' }} mx-1">
                                {{ $i }}
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-tiktok" role="tabpanel" aria-labelledby="nav-tiktok-tab" tabindex="0">
                <div class="tiktok-container">

                </div>
            </div>
            <div class="tab-pane fade" id="nav-line" role="tabpanel" aria-labelledby="nav-line-tab" tabindex="0">
                <div class="line-container">

                </div>
            </div>
        </div>
    </section>
    <section style="background-color: var(--color-3); padding: 10px 20px; justify-items: center;">
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-7); font-weight: bold;">ปฏิทิน<span
                    style="color: var(--color-4)">กิจกรรม</span></h1>
            <p class="text-center" style="color: #FFF">ที่นี่คุณสามารถค้นหาข้อมูลเกี่ยวกับเทศบาลเมืองปากพูนได้อย่างง่ายดาย
                โดยปฏิทินกิจกรรมจะแสดงวันที่และชื่อกิจกรรมที่สำคัญของเทศบาลเมืองปากพูน
            </p>
        </div><br>
        <div id="calendar"></div><br>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/locales-all.global.min.js'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'th', // Set the locale to Thai
                    events: [
                        @foreach ($events as $event)
                                                                                                                                                                                                            {
                                title: '{{ $event->title }}',
                                start: '{{ $event->start_date }}',
                                end: '{{ $event->end_date }}',
                            },
                        @endforeach
                                                                                                ],
                    eventClick: function (info) {
                        var start = info.event.start;
                        var end = info.event.end;
                        var options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
                        var startStr = start ? start.toLocaleString('th-TH', options) : '-';
                        var endStr = end ? end.toLocaleString('th-TH', options) : '-';
                        var desc = info.event.extendedProps.description || 'ไม่มีรายละเอียดเพิ่มเติม';
                        Swal.fire({
                            title: info.event.title,
                            html: desc + '<br>เริ่ม: ' + startStr + '<br>สิ้นสุด: ' + endStr,
                            icon: "info"
                        });
                    }
                });
                calendar.render();
            });
        </script>
    </section>
    <section style="padding: 10px 20px;">
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-1); font-weight: bold;">ปากพูน<span
                    style="color: var(--color-4)">อัพเดทข่าวเด่น</span></h1>
            <p class="text-center">ข่าวเด่น เทศบาลเมืองปากพูน</p>
        </div><br>
        <div>
            <nav>
                <div class="nav nav-tabs justify-content-around" id="news-highlight-tabset" role="tablist">
                    <button class="nav-link active" id="news-highlight-tab1" data-bs-toggle="tab"
                        data-bs-target="#news-highlight-pane1" type="button" role="tab" aria-controls="news-highlight-pane1"
                        aria-selected="true" style="color: #000">ข่าวเด่น
                        Video Facebook</button>
                    <button class="nav-link" id="news-highlight-tab2" data-bs-toggle="tab"
                        data-bs-target="#news-highlight-pane2" type="button" role="tab" aria-controls="news-highlight-pane2"
                        aria-selected="false" style="color: #000">ประกาศทั่วไป</button>
                    <button class="nav-link" id="news-highlight-tab3" data-bs-toggle="tab"
                        data-bs-target="#news-highlight-pane3" type="button" role="tab" aria-controls="news-highlight-pane3"
                        aria-selected="false" style="color: #000">รับสมัครงาน</button>
                </div>
            </nav>
            <div class="tab-content" id="news-highlight-tabContent">
                <div class="tab-pane fade show active" id="news-highlight-pane1" role="tabpanel"
                    aria-labelledby="news-highlight-tab1" tabindex="0">
                    <div class="facebook-container" style="justify-self: center;">
                        {{-- Pagination logic (ข่าวเด่น) --}}
                        <div class="ifreame-container">
                            @foreach ($news_update_facebook as $update)
                                <iframe src="{{ url($update->url) }}" width="560" height="429"
                                    style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                    allowFullScreen="true"></iframe>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="news-highlight-pane2" role="tabpanel" aria-labelledby="news-highlight-tab2"
                    tabindex="0">
                    <p>ประกาศทั่วไป เทศบาลเมืองปากพูน</p>
                </div>
                <div class="tab-pane fade" id="news-highlight-pane3" role="tabpanel" aria-labelledby="news-highlight-tab3"
                    tabindex="0">
                    <p>รับสมัครงาน เทศบาลเมืองปากพูน</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <img src="{{ asset('image/banner/เทศบาลเมืองปากพูน.png') }}" alt="banner" width="100%" style="height: auto;">
        <img src="{{ asset('image/banner/หน้าเว็บ-01.jpg') }}" alt="banner" width="100%" style="height: auto;">
    </section>
    <section style="background-color: var(--color-3); padding-top: 2.5rem;">
        <div class="container">
            <h1 class="text-center" style="color: #FFF; font-weight: bold;">ปากพูน<span
                    style="color: var(--color-4)">กิจกรรม</span></h1>
            <p class="text-center" style="color: #FFF;">รายการนายกพาพัฒนาเมือง, คณะผู้บริหาร / สธ เทศบาลเมืองปากพูน</p>
        </div><br>
        <div class="video-mayor-container">
            {{-- Pagination logic (วิดีทัศน์นายก) --}}
            @php
                $mayorPerPage = 6;
                $mayorPage = request()->get('mayor_page', 1);
                $mayorTotal = count($video_mayor);
                $mayorChunks = collect($video_mayor)->chunk($mayorPerPage);
                $mayorCurrentItems = $mayorChunks[$mayorPage - 1] ?? collect();
                $mayorTotalPages = $mayorChunks->count();
            @endphp

            @foreach ($mayorCurrentItems as $item)
                <iframe src="{{ url($item->url) }}" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true"></iframe>
            @endforeach
            <div class="text-center mt-3 justify-content-center">
                @for ($i = 1; $i <= $mayorTotalPages; $i++)
                    <a href="?mayor_page={{ $i }}#video-mayor" style="color: {{ $i == $mayorPage ? '#FFF' : '#FFF' }};"
                        class="btn btn-sm {{ $i == $mayorPage ? 'btn' : 'btn-outline-dark' }} mx-1">
                        {{ $i }}
                    </a>
                @endfor
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-1); font-weight: bold;">รางวัลแห่ง<span
                    style="color: var(--color-4);">ความภาคภูมิ</span></h1>
            <p class="text-center">รางวัลที่ได้รับของเทศบาลเมืองปากพูน</p>
        </div><br>
    </section>
    <section style="background-color: var(--color-3); padding: 10px 20px;">
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-7); font-weight: bold;">ปากพูน<span
                    style="color: var(--color-4);">บริการประชาชน</span></h1>
            <p class="text-center" style="color: var(--color-7)">เมนูบริการประชาชนของเทศบาลเมืองปากพูน</p>
        </div><br>
        <div class="btn-service-container">
            <div>
                <img src="{{ asset('image/button/ระบบร้องเรียนทั่วไป.png') }}" alt="button image">
                <img src="{{ asset('image/button/ระบบร้องเรียนทุจริต.png') }}" alt="button image">
                <img src="{{ asset('image/button/ระบบร้องเรียนพนักงาน.png') }}" alt="button image">
                <img src="{{ asset('image/button/ระบบจดทะเบียนพาณิชย์.png') }}" alt="button image">
            </div>
            <div>
                <img src="{{ asset('image/button/ระบบตรวจสอบข้อมูล การลงทะเบียนผู้สูงอายุ.png') }}" alt="button image">
                <img src="{{ asset('image/button/ระบบติดตามความคืบหน้า โครงการก่อสร้าง.png') }}" alt="button image">
            </div>
        </div>
    </section>
    <section>
        <img src="{{ asset('image/banner/ชาวปากพูน เราพร้อมดูแล.png') }}" alt="banner" width="100%" style="height: auto;">
    </section>
    <section>
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-1); font-weight: bold;">ทางลัด / <span
                    style="color: var(--color-4);">เข้าถึงด่วน</span></h1>
            <p class="text-center">เข้าถึงเมนูต่าง ๆ ได้อย่างรวดเร็ว ผ่านเว็บไซต์เทศบาลเมืองปากพูน</p>
        </div><br>
    </section>
    <!-- Image Popup Modal 1 -->
    <div id="imageModal1"
        style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.7);justify-content:center;align-items:center;">
        <span onclick="closeImageModal1()"
            style="position:absolute;top:30px;right:50px;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;">&times;</span>
        <img id="modalImage1" src="{{ asset('image/ปกเว็บไซต์/banner_วันแม่แห่งชาติ.jpg') }}" alt="popup1"
            style="max-width:80vw;max-height:80vh;box-shadow:0 0 20px #000;border-radius:10px;display:block;margin:auto;">
        <div style="text-align:center; position: absolute; bottom: 30px;">
            <a href="#" id="modalDetailBtn1" class="btn btn-primary" style="margin-right:10px;"><i
                    class="bi bi-pen"></i>ลงนามถวายพระพร</a>
            <button onclick="closeImageModal1()" class="btn btn-danger"><i class="bi bi-x-lg"></i>ปิด</button>
        </div>
    </div>
    <!-- Image Popup Modal 2 -->
    <div id="imageModal2"
        style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.7);justify-content:center;align-items:center;">
        <span onclick="closeImageModal2()"
            style="position:absolute;top:30px;right:50px;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;">&times;</span>
        <img id="modalImage2" src="{{ asset('image/ปกเว็บไซต์/ITA_popup.jpg') }}" alt="popup2"
            style="max-width:80vw;max-height:80vh;box-shadow:0 0 20px #000;border-radius:10px;display:block;margin:auto;">
        <div style="text-align:center; position: absolute; bottom: 30px;">
            <button onclick="closeImageModal2()" class="btn btn-danger"><i class="bi bi-x-lg"></i>ปิด</button>
        </div>
    </div>
    <script>
        function showImageModal1() {
            document.getElementById('imageModal1').style.display = 'flex';
        }
        function closeImageModal1() {
            document.getElementById('imageModal1').style.display = 'none';
            // Show modal 2 after closing modal 1
            setTimeout(function () {
                document.getElementById('imageModal2').style.display = 'flex';
            }, 200); // delay for smoothness
        }
        function closeImageModal2() {
            document.getElementById('imageModal2').style.display = 'none';
        }
        // Show modal 1 automatically on page load
        window.addEventListener('DOMContentLoaded', function () {
            if (!window.location.search) {
                showImageModal1();
            }
        });
    </script>
    <div>
        <!-- Floating Scroll to Top Button -->
        <button id="scrollTopBtn">
            <i class="bi bi-arrow-up"></i>
        </button>
        <script>
            // Show/hide button
            window.addEventListener('scroll', function () {
                var btn = document.getElementById('scrollTopBtn');
                if (window.scrollY > 200) {
                    btn.style.display = 'block';
                } else {
                    btn.style.display = 'none';
                }
            });
            // Scroll to top
            document.getElementById('scrollTopBtn').onclick = function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            };
        </script>
    </div>
@endsection