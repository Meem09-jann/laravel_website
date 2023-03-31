<!--PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        .uk-accordion-title{
            font-size: 30px;
            font-weight: 700;
            color: #000;
        }
        .uk-accordion-content p{
            color: #606060;
            font-weight: 500;
            font-size: 18px;
        }
        .container-div{
            padding: 5% 15px;
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container container-div">
        <div class="row mglr">
            <li>
                <h3 class="uk-accordion-title">개인정보</h3>
                <div class="uk-accordion-content">
                    <p>
                        TiCON시스템의 공개 프로파일 페이지에 표시되는 성, 거주 국가, PayPal 주소, 이메일 주소 등 특정 개인정보를 제공할 수 있습니다. 페이지를 방문할 때마다 당사의 서버는 웹 브라우저가 보내는 특정 정보를 자동으로 기록합니다. 여기에는 IP 주소, 브라우저 유형 및 언어, 본 페이지, 날짜 및 시간과 같은 정보가 포함될 수 있습니다. 이 데이터는 제공된 서비스의 안정성을 보장하기 위해 사용되며 7일 후에 자동으로 삭제됩니다. 당사는 귀하의 개인정보를 보호하고 존중합니다. 당사는 자사 제품 또는 서비스의 마케팅을 위해 다른 회사에 개인정보를 판매하거나 제공하지 않습니다. 당사는 귀하의 계정이 활성화되어 있거나 서비스를 제공하기 위해 필요한 경우 또는 당사의 법적 의무를 준수하고 분쟁을 해결하며 동의를 이행하기 위해 필요한 경우 귀하의 개인정보를 보관합니다. 당사는 법률에서 요구하는 대로(예: 소환장, 영장 또는 법원 명령에 따르기 위해) 귀하의 개인정보를 공개할 수 있는 권리를 보유하며, 당사에서는 당사의 권리를 보호하고, 소송을 회피하고, 귀하의 안전이나 타인의 안전을 도모하고, 사기에 대한 조사 및/또는 정부 요청에 응하기 위해 공개가 필요하다고 판단될 때 이를 공개할 수 있습니다. 당사는 또한 국가 안보, 법 집행 또는 기타 공공의 중요 사안을 이유로 이러한 공개가 이루어져야 한다고 판단되는 경우 귀하에 대한 정보를 공개할 수도 있습니다.
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">쿠키</h3>
                <div class="uk-accordion-content">
                    <p>
                        쿠키는 웹 사이트를 방문할 때 컴퓨터로 전송되는 문자열이 들어 있는 작은 파일입니다. 웹 사이트를 다시 방문하면 해당 사이트에서 브라우저를 인식할 수 있습니다. 쿠키는 TiCON시스템에서 방문자 선호도 및 웹 사이트의 기능에 필요한 기타 기술 정보를 저장하는 데 사용됩니다. 이 쿠키에는 개인정보가 저장되지 않습니다. 모든 쿠키를 거부하거나 쿠키가 전송되는 시기를 표시하도록 브라우저를 재설정할 수 있습니다. 그러나 일부 웹 사이트 기능 또는 서비스는 쿠키가 없으면 제대로 작동하지 않을 수 있습니다.es.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">16 세 미만자</h3>
                <div class="uk-accordion-content">
                    <p>TiCON시스템 16세 미만자를 대상으로 판매되지 않습니다. 16세 미만자에 대한 개인정보가 부주의로 수집된 사실이 발견되면 즉시 삭제하겠습니다.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">서드파티 서비스 기반 정보</h3>
                <div class="uk-accordion-content">
                    <p>
                        TiCON시스템은 Amazon.com에 대한 광고 및 링크를 통해 사이트가 광고 수수료를받을 수있는 수단을 제공하도록 설계된 제휴 광고 프로그램 인 Amazon Services LLC Associates Program에 참여하고 있습니다.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">Google Analytics</h3>
                <div class="uk-accordion-content">
                    <p>

                        이 웹 사이트는 Google, Inc.(Google)에서 제공하는 웹 분석 서비스인 Google Analytics를 사용합니다. Google Analytics는 컴퓨터에 저장된 텍스트 파일인 "쿠키"를 사용하여 웹 사이트에서 사용자가 사이트를 사용하는 방법을 분석할 수 있도록 도와줍니다. 쿠키에서 생성된 웹 사이트 사용 정보(IP 주소 포함)는 Google에 의해 미국 내 서버로 전송되어 저장됩니다. IP 익명화가 활성화되는 경우, Google은 유럽연합 회원국 및 유럽 경제 지역 협정의 다른 당사자를 위한 IP 주소의 마지막 8진수를 잘라내거나 익명화합니다. 예외적인 경우에만 전체 IP 주소는 미국의 Google 서버에 의해 전송되고 단축됩니다. 웹 사이트 제공자를 대신하여 Google은 사용자의 웹 사이트 사용을 평가하고 웹 사이트 운영자를 위한 웹 사이트 활동에 대한 보고서를 취합하며 웹 사이트 활동 및 인터넷 사용과 관련된 기타 서비스를 웹 사이트 제공자에게 제공하기 위해 이 정보를 사용합니다. Google은 사용자의 IP 주소를 Google이 보유한 다른 데이터와 연결하지 않습니다. 브라우저에서 적절한 설정을 선택하여 쿠키 사용을 거부할 수 있습니다. 그러나 이 작업을 수행할 경우 이 웹 사이트의 전체 기능을 사용하지 못할 수 있습니다. 또한 https://tools.google.com/dlpage/gaoptout에서 사용할 수 있는 브라우저 플러그인을 다운로드하고 설치하여 Google의 데이터 수집 및 사용을 방지할 수 있습니다.
                    </p>
                </div>
            </li>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
