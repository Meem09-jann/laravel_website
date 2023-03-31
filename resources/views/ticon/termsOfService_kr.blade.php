<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
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
                    <h3 class="uk-accordion-title">액세스</h3>
                    <div class="uk-accordion-content">
                        <p>
                            당사와 함께 계정을 만들 때 항상 정확하고 완전하며 최신 정보를 제공해야 합니다. 그렇게 하지 않을 경우 약관을 위반하게 되며, 이로 인해 서비스에 대한 귀하의 계정이 즉시 해지될 수 있습니다. 귀하는 서비스에 액세스하는 데 사용하는 암호와 암호에 따라 당사의 서비스나 타사 서비스에 있는 모든 활동 또는 작업에 대해 보호할 책임이 있습니다. 귀하는 타사에 암호를 공개하지 않기로 동의합니다. 귀하는 보안 위반이나 계정의 무단 사용에 대해 즉시 당사에 알려야 합니다.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">다른 웹 사이트에 연결</h3>
                    <div class="uk-accordion-content">
                        <p>
                            본 서비스는 TiCON시스템에서 소유하거나 제어하지 않는 타사 웹 사이트 또는 서비스에 대한 링크를 포함할 수 있습니다. TiCON시스템은 서드파티 웹 사이트 또는 서비스의 콘텐츠, 개인정보 보호 정책 또는 관행에 대한 통제권을 가지고 있지 않으며 책임을 지지 않습니다. 귀하는 또한 TiCON시스템이 이러한 웹 사이트나 서비스를 통해 이용 가능한 콘텐츠, 상품 또는 서비스의 사용 또는 의존에 의해 또는 이와 관련하여 야기되거나 주장된 손해 또는 손실에 대해 직접 또는 간접적으로 책임지거나 책임지지 않는다는 것을 인정하고 동의합니다. 방문하는 타사 웹 사이트 또는 서비스의 이용 약관 및 개인정보 보호 정책을 읽어 보시기 바랍니다.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">해지</h3>
                    <div class="uk-accordion-content">
                        <p>
                            당사는 귀하가 약관을 위반하는 경우를 포함하여 어떠한 이유에도 불구하고 사전 통지나 책임 없이 당사에 대한 액세스를 즉시 해지하거나 중단할 수 있습니다. 해지 시 존속해야 하는 약관의 모든 조항은 소유권 조항, 보증 거부, 배상 및 책임 제한을 포함하되 제한 없이 해지 후에도 존속됩니다. 당사는 귀하가 약관을 위반하는 경우를 포함하여 어떠한 이유에도 불구하고 사전 통지나 책임 없이 귀하의 계정을 즉시 해지하거나 정지시킬 수 있습니다. 서비스 해지 시 귀하의 서비스 사용권이 즉시 중지됩니다. 계정을 해지하려는 경우 서비스 사용을 중지할 수 있습니다. 해지 시 존속해야 하는 약관의 모든 조항은 소유권 조항, 보증 거부, 배상 및 책임 제한을 포함하되 제한 없이 해지 후에도 존속됩니다.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">준거법</h3>
                    <div class="uk-accordion-content">
                        <p>
                            본 조항은 법률 조항의 충돌과 관계없이 방글라데시의 법률에 따라 적용 및 해석됩니다. 본 약관의 어떠한 권리나 조항을 집행하지 않는 것은 해당 권리의 포기로 간주하지 않습니다. 본 약관의 조항이 법원에 의해 무효 또는 집행할 수 없는 것으로 간주하는 경우, 본 약관의 나머지 조항은 효력을 유지합니다. 본 약관은 당사와 관련된 당사 간의 전체 동의를 구성하며, 당사와 관련하여 당사가 가지고 있을 수 있는 사전 동의를 대체하고 교체합니다.
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
