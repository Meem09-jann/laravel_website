<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .case_study_con>*{
            font-family: 'Roboto', sans-serif;
        }
        .mast__title.transformNone{
            text-transform:none;
            letter-spacing:0;
        }
        .casestudy_no{
            color:#d7d7d7;
            font-size:4.5vw;
            display:inline-block;
            font-family: 'Roboto', sans-serif;
            margin:0px;
        }
        .casestudy_no span{
            color: #058ed7;
            margin-left: 0;
        }
        .main_rows{
            padding: 6% 0px 4%;
        }
        .casestudy_title{
            color:#141414;
            font-family: 'Roboto', sans-serif;
            font-size:2.2vw;
            margin:0px;
            padding-top:10px;
            font-weight: 400;
        }
        .case-cols{
            margin-bottom:15px;
        }
        .casestudyinfo{
            color:#353535;
            font-family: 'Roboto', sans-serif;
            font-size:1.1vw;
        }

        @media (max-width:1024px){
            .casestudyinfo{
                font-size:1.5vw;
            }
        }
        @media (max-width:767.98px){
            .casestudyinfo{
                font-size:13px;
            }
            .casestudy_title{
                font-size:18px;
            }
            .casestudy_no{
            font-size:5.5vw;}
            
        }
        hr {
            margin-top:0px;
            margin-bottom:0px;
        }
        .case_inner_col .casestudyinfo{
            padding-left:15px;
        }
        .case_inner_col,.case_inner_col1 {
            margin-bottom:4%;
        }
        .case_inner_col::before{
            content: "";
            width: 3px;
            height: 50px;
            background: #058ed7;
            position: absolute;
            top: 5px;
        }
        .choose_no{
            width: 32px;
            height: 32px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 2px solid #d7d7d7;
            line-height: 28px;
            font-size: 16px;
            color: #058ed7;;
            font-weight: 600;
        }
        .choose_title{
            color:#058ed7;
            font-weight:600;
            text-transform:uppercase;
            margin-bottom:0px;
            font-size:16px;
        }
        @media (min-width: 1200px){
            .container.case_study_con {
                width: 100%;
                padding: 0px 10%;
            }
        }
        @media (max-width:767.98px){
            .case_inner_col::before {
                content: "";
                width: 2px;
                height: 12px;
                background: #058ed7;
                position: absolute;
                top: 3px;
            }
        }
    </style>
@endpush
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container case_study_con">
        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">01<span>.</span></h3>
                <h3 class="casestudy_title"><strong>Overview</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">This is the success story of one of our great customers. If you’re interested in our streaming solution, BlessBit and take advantage of our feature-rich, highly scalable SaaS platform to improve the visibility of your business, contact info@ticonsys.com.</p>
            </div>
            
        </div>
        <hr/>


        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">02<span>.</span></h3>
                <h3 class="casestudy_title">History of <strong>RabbitHoleBD:</strong> First <strong>OTT platform</strong> in <strong>Bangladesh</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">Starting in 2017, RabbitholeBD originally started with the idea of distributing premium content with an freemium model. The original goal was to generate enough loyal user by offering premium sports content exclusively available to Content Matters (owner of RabbitHoleBD platform), and offer more premium content to those users at a later time at premium price. However, After X years of operation, there was almost close to zero loyal users, due to technical problems which couldn’t be resolved. At this point, BlessBit taken over the system and started a whole new experience on <a href="https://www.rabbitholebd.com" target="_blank">RabbitHoleBD.com</a></p>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">03<span>.</span></h3>
                <h3 class="casestudy_title"><strong>Challenges</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">RabbitHoleBD faced below challenges before they were introduced to BlessBit.</p>

                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Serving Live content: system down just around starting time of any big event.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">System was able to handle only fixed number of users, due to system not being scalable.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Manually change source, always require resources at both ends (client-solution provider).</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Ad management not       responsive enough, resulting awkward timing for ad delivery.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Always expensive infrastructure wise, because of fixed hardware/resource allocation.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">04<span>.</span></h3>
                <h3 class="casestudy_title">Why <strong>RabbitholeBD</strong> Choose <strong>Blessbit</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <div class="row">
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">1</p>
                        <p class="choose_title">Highly Scalable</p>
                        <p class="casestudyinfo">We served 414,644 concurrent users at peak during World Cup. System is highly scalable to the point where almost zero manual intervention is required.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">2</p>
                        <p class="choose_title">Content Security</p>
                        <p class="casestudyinfo">We implemented a custom authentication system. A new way to secure content combining CloudFront with one-to-one request and response and almost  no overhead.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">3</p>
                        <p class="choose_title">Dynamic Ad Pusher</p>
                        <p class="casestudyinfo">Client can push ads at any time they want, in real time. For on-demand content, client can schedule ads and they will be pushed on that exact time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">4</p>
                        <p class="choose_title">Strong Transcoder</p>
                        <p class="casestudyinfo">We determine the most suitable ffmpeg profile. Clients enjoy not only an eye-pleasing viewing experience but also perfectly CPU/GPU optimized at the same time.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">5</p>
                        <p class="choose_title">dynamic reporting</p>
                        <p class="casestudyinfo">Using combination of own analytics (plus our in-house developed AI) and third party analytics tool, wide range of reporting is available at management panel.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">05<span>.</span></h3>
                <h3 class="casestudy_title"><strong>Architecture</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">Following architecture is being used at RabbitHoleBD.com and this is how we achieved such operational efficiency and cost effectiveness.</p>
                
                <img src="{{ asset('assets/img/CaseStudy.png')}}" alt="" class="img-responsive">
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">06<span>.</span></h3>
                <h3 class="casestudy_title">Outcome For <strong>RabbitHoleBD</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">Here the outcomes for RabbitHoleBD:</p>

                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Using AWS CloudFront for live streaming was a huge money saver, realized by client.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Using strong security in combination with cloudfront, was realized positively by client in terms of security and cost cutting.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Using RDS and ElastiCache improved system efficiency and push the performance through the roof.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">Snapshot & AMI as backup, auto destroy and deploy new web server as and when required is a major cost cutting point for RabbitHoleBD.com. This also ensures no resource was wasted.</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">S3 and Cloudfront based VOD content delivery ensures smooth experience for RabbitHoleBD viewers</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">07<span>.</span></h3>
                <h3 class="casestudy_title"><strong>Conclusion</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">BlessBit has taken RabbitHoleBD a long way forward and provided a great boost in revenue  growth, business expansion and a great customer satisfaction. With almost 0.9 million registered user, RabbitHoleBD are now confident again to offer premium content just like they originally intended/planned.  
                <br><br>
                BlessBit allows RabbitHoleBD to deliver a top-quality service while minimizing expense and technical overhead. Combined with excellent customer support around software and website, this has helped RabbitHoleBD’s service to become a major success. We’re thrilled to be working with RabbitHoleBD and expect to continue this great journey together.</p>
            </div>
            
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script>
        $(document).ready(function() {
            $('.mast__title').addClass('transformNone');
        })
    </script>
@endpush

<!-- PAGE END -->
