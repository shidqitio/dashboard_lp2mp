@extends('users.puslaba.layout.sidebar')

@section('title','puslaba')

@section('container')

@section('contain')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                        </i>
                    </div>
                    <div>Rekap Progress DO
                        <!-- <div class="page-title-subheading">Highly configurable boxes best used for showing numbers in an user friendly way.</div> -->
                    </div>
                </div>
            </div>
        </div>            
        <div class="">
            <div class="row">
                <!-- <iframe width="100%" height="1000px" src="https://app.powerbi.com/view?r=eyJrIjoiYjE0YmVhY2YtMTA4YS00NjgxLTk1OTAtODE3MzU0MDE3NTQ2IiwidCI6IjUwODkxNmEwLTdiODktNDNhMS1hZjRlLTcyZmUxNWFiYTViOSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe> -->
                <!-- <iframe width="100%" height="1000px" src="https://app.powerbi.com/reportEmbed?reportId=a416944a-0cf5-42a6-997b-e20468c9d5ab&autoAuth=true&ctid=508916a0-7b89-43a1-af4e-72fe15aba5b9&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe> -->
                <iframe width="100%" height="1000px" src="https://app.powerbi.com/reportEmbed?reportId=7ee77f0d-74cd-491e-a35d-09f2d3eed8a0&autoAuth=true&ctid=508916a0-7b89-43a1-af4e-72fe15aba5b9&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <div class="badge badge-success mr-1 ml-0">
                                    <small>NEW</small>
                                </div>
                                Footer Link 4
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>   
</div>

@endsection