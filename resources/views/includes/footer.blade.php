<div class="footer" style="background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(55, 206, 242) 0%, rgb(2, 137, 212) 100%) repeat;">
    <div class="container" style="border-bottom: 1px solid rgb(255, 255, 255);">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <span class="left">
                    <img src="{{ asset('assets/img/footer.png')}}" alt="Logo" class="footer-logo">

                    @php if( $data->prefer_language() == 'kr' ):  @endphp

                    <p class="footer-mail" style="color: rgb(255, 255, 255);">info@ticonsys.com / 02-866-1477</p>
                    @php else:  @endphp
                    
                    <p class="footer-mail" style="color: rgb(255, 255, 255);"> info@ticonsys.com</p>
                    @endif
                </span>
            </div>
            
            <div class="col-sm-4">
                <center>
                <!-- {{asset('assets\img\home\aws_apn.png')}} -->
                    <img src=" {{ asset('assets/img/home/aws_apn.png')}}" alt="AWS APN" style="width:55%">
                </center>
            </div>

            <div class="col-sm-4 col-xs-12">
                <center class="right">
                    <ul class="footer-left-menu">
                    @php if( $data->prefer_language() == 'kr' ):  @endphp
                        <li>
                            <a href="{{url('/terms')}}" class="footer-left-link">서비스 약관</a>
                        </li>
                        <li>
                            <a href="{{url('/privacy')}}" class="footer-left-link">개인정보 보호 정책</a>
                        </li>
                        
                        @php else:  @endphp
                        <li>
                            <a href="{{url('/terms')}}" class="footer-left-link">Term of Service</a>
                        </li>
                        <li>
                            <a href="{{url('/privacy')}}" class="footer-left-link">Privacy Policy</a>
                        </li>
                        @endif

                    </ul>
                    <div class="social-icons">
                    <a href="https://www.facebook.com/TiconSystem/" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/ticonsystemltd" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/ticonsys/" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/ticonsys/" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UCNBApk70ExuCc9hpyzCghxA" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-youtube"></i></a>
                            <a href="https://ticonsys.medium.com" target="_blank" class="social-link" style="color: rgb(255, 255, 255);"><i class="fa fa-medium"></i></a>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <p style="text-align: center;margin-top: 15px;color: rgb(255, 255, 255);">&copy;{{ date("Y") }} TiCON System Limited. All Rights Reserved.</p>
</div>