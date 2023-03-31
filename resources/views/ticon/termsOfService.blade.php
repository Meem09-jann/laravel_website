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
                <h3 class="uk-accordion-title">Access</h3>
                <div class="uk-accordion-content">
                    <p>
                        When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.

                        You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.

                        You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">Links To Other Web Sites</h3>
                <div class="uk-accordion-content">
                    <p>
                        Our Service may contain links to third-party web sites or services that are not owned or controlled by TiCON System Ltd.

                        TiCON System Ltd has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that TiCON System Ltd shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.

                        We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">Termination</h3>
                <div class="uk-accordion-content">
                    <p>
                        We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.

                        All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.

                        We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.

                        Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.
                        All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.
                    </p>
                </div>
            </li>
            <li>
                <h3 class="uk-accordion-title">Governing Law</h3>
                <div class="uk-accordion-content">
                    <p>
                        These Terms shall be governed and construed in accordance with the laws of Bangladesh, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior
                        agreements we might have between us regarding the Service.
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
