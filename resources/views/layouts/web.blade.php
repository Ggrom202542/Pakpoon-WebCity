<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') {{ config('app.name', '') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <img src="{{ asset('image/ปกเว็บไซต์/หน้าปกเว็บไซต์เทศบาลเมืองปากพูน.gif') }}"
        alt="หน้าปกเว็บไซต์เทศบาลเมืองปากพูน">
    <nav class="navbar navbar-expand-lg" style="background-color: var(--color-3);height: 70px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">หน้าหลัก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ข้อมูลบุคลากร
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">สภาเทศบาล </a></li>
                            <li><a class="dropdown-item" href="#">คณะผู้บริหาร</a></li>
                            <li><a class="dropdown-item" href="#">หัวหน้าส่วนราชการ</a></li>
                            <li><a class="dropdown-item" href="#">สำนักปลัด</a></li>
                            <li><a class="dropdown-item" href="#">กองคลัง</a></li>
                            <li><a class="dropdown-item" href="#">กองช่าง</a></li>
                            <li><a class="dropdown-item" href="#">กองประปา</a></li>
                            <li><a class="dropdown-item" href="#">กองสาธารณสุข</a></li>
                            <li><a class="dropdown-item" href="#">กองการศึกษา</a></li>
                            <li><a class="dropdown-item" href="#">กองการสวัสดิการ</a></li>
                            <li><a class="dropdown-item" href="#">หน่วยตรวจสอบภายใน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ข้อมูลเทศบาล
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ประวัติความเป็นมา</a></li>
                            <li><a class="dropdown-item" href="#">โครงสร้างองค์กร</a></li>
                            <li><a class="dropdown-item" href="#">วิสัยทัศน์ พันธกิจ</a></li>
                            <li><a class="dropdown-item" href="#">ตราสัญลักษณ์</a></li>
                            <li><a class="dropdown-item" href="#">อำนาจหน้าที่</a></li>
                            <li><a class="dropdown-item" href="#">นโยบายการบริหารงาน</a></li>
                            <li><a class="dropdown-item" href="#">ท่องเที่ยวชุมชนปากพูน</a></li>
                            <li><a class="dropdown-item" href="#">สภาพทั่วไปและข้อมูลพื้นฐาน</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ประชาสัมพันธ์
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ข่าวประชาสัมพันธ์</a></li>
                            <li><a class="dropdown-item" href="#">ข่าวจัดซื้อจัดจ้าง</a></li>
                            <li><a class="dropdown-item" href="#">ข่าวรับสมัครงาน</a></li>
                            <li><a class="dropdown-item" href="#">งานการเงินและบัญชี</a></li>
                            <li><a class="dropdown-item" href="#">จัดเก็บรายได้</a></li>
                            <li><a class="dropdown-item" href="#">ข่าวสารจาก Facebook</a></li>
                            <li><a class="dropdown-item" href="#">สื่อวิดีทัศน์</a></li>
                            <li><a class="dropdown-item" href="#">วารสาร / E-Book</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ส่วนราชการ
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">การควบคุมภายในและการบริหารจัดการความเสี่ยง</a></li>
                            <li><a class="dropdown-item" href="#">รายงานติดตามผล</a></li>
                            <li><a class="dropdown-item" href="#">แผนการตรวจสอบภายใน</a></li>
                            <li><a class="dropdown-item" href="#">แผนการใช้จ่ายงบประมาณประจำปี</a></li>
                            <li><a class="dropdown-item" href="#">แผนปฏิบัติการป้องกันปราบปรามทุจริตและประพฤติชอบ</a></li>
                            <li><a class="dropdown-item" href="#">แผนพัฒนาบุคลากร</a></li>
                            <li><a class="dropdown-item" href="#">แผนอัตรากำลัง 3 ปี</a></li>
                            <li><a class="dropdown-item" href="#">แผนพัฒนาท้องถิ่น</a></li>
                            <li><a class="dropdown-item" href="#">แผนการดำเนินงาน</a></li>
                            <li><a class="dropdown-item" href="#">งานกิจการสภา</a></li>
                            <li><a class="dropdown-item" href="#">ITA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main></main>
</body>

</html>