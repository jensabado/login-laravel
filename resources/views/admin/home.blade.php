@extends('admin.layout.base')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/building.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">3</p>
                                <p class="h6">Building</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/room.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">7</p>
                                <p class="h6">Room</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/section.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">4</p>
                                <p class="h6">Section</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/teacher.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">9</p>
                                <p class="h6">Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/grade_7_sub.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">10</p>
                                <p class="h6">Grade 7 Subject</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/grade_8_sub.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">3</p>
                                <p class="h6">Grade 8 Subject</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/grade_9_sub.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">9</p>
                                <p class="h6">Grade 9 Subject</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-3">
                        <div class="d-flex flex-row align-items-center">
                            <img style="height: 80px;" src="./assets/img/illustration/grade_10_sub.svg" alt="">
                            <div class="d-flex flex-column align-items-end w-100 h-100">
                                <p style="font-weight: 900; color: #274C43;" class="h1">5</p>
                                <p class="h6">Grade 10 Subject</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
