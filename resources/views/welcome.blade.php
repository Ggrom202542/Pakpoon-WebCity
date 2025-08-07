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
                <div class="ifreame-container">
                    <div>
                        {{-- Pagination logic --}}
                        @php
                            $perPage = 4;
                            $page = request()->get('fbpage', 1);
                            $total = count($news_facebook);
                            $chunks = collect($news_facebook)->chunk($perPage);
                            $currentItems = $chunks[$page - 1] ?? collect();
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
                            <a href="?fbpage={{ $i }}#nav-facebook"
                                class="btn btn-sm {{ $i == $page ? 'btn' : 'btn-outline-dark' }} mx-1">
                                {{ $i }}
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-youtube" role="tabpanel" aria-labelledby="nav-youtube-tab" tabindex="0">...
            </div>
            <div class="tab-pane fade" id="nav-tiktok" role="tabpanel" aria-labelledby="nav-tiktok-tab" tabindex="0">...
            </div>
            <div class="tab-pane fade" id="nav-line" role="tabpanel" aria-labelledby="nav-line-tab" tabindex="0">...
            </div>
        </div>
    </section>
    <section style="background-color: var(--color-3); padding: 10px 0;">
        <div class="container">
            <h1 class="text-center mt-5" style="color: var(--color-7); font-weight: bold;">ปฏิทินกิจกรรม</h1>
            <p class="text-center" style="color: #FFF">ที่นี่คุณสามารถค้นหาข้อมูลเกี่ยวกับเทศบาลเมืองปากพูนได้อย่างง่ายดาย
            </p>
        </div><br>

    </section>
    <!-- Image Popup Modal 1 -->
    <div id="imageModal1" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.7);justify-content:center;align-items:center;">
        <span onclick="closeImageModal1()" style="position:absolute;top:30px;right:50px;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;">&times;</span>
        <img id="modalImage1" src="{{ asset('image/ปกเว็บไซต์/banner_วันแม่แห่งชาติ.jpg') }}" alt="popup1" style="max-width:80vw;max-height:80vh;box-shadow:0 0 20px #000;border-radius:10px;display:block;margin:auto;">
        <div style="text-align:center; position: absolute; bottom: 30px;">
            <a href="#" id="modalDetailBtn1" class="btn btn-primary" style="margin-right:10px;"><i class="bi bi-pen"></i>ลงนามถวายพระพร</a>
            <button onclick="closeImageModal1()" class="btn btn-danger"><i class="bi bi-x-lg"></i>ปิด</button>
        </div>
    </div>
    <!-- Image Popup Modal 2 -->
    <div id="imageModal2" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.7);justify-content:center;align-items:center;">
        <span onclick="closeImageModal2()" style="position:absolute;top:30px;right:50px;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;">&times;</span>
        <img id="modalImage2" src="{{ asset('image/ปกเว็บไซต์/ITA_popup.jpg') }}" alt="popup2" style="max-width:80vw;max-height:80vh;box-shadow:0 0 20px #000;border-radius:10px;display:block;margin:auto;">
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
            setTimeout(function(){
                document.getElementById('imageModal2').style.display = 'flex';
            }, 200); // delay for smoothness
        }
        function closeImageModal2() {
            document.getElementById('imageModal2').style.display = 'none';
        }
        // Show modal 1 automatically on page load
        window.addEventListener('DOMContentLoaded', function () {
            showImageModal1();
        });
    </script>
@endsection