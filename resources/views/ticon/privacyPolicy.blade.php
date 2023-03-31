<!-- PAGE START -->
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
                    <h3 class="uk-accordion-title">Personal information</h3>
                    <div class="uk-accordion-content">
                        <p>
                            You may provide certain personal information, such as your first and last name, the country you live in, PayPal address, and email address, which will be displayed on your public profile page on TiCON System Ltd.

                            Whenever you visit a page, our servers automatically record certain information that your web browser sends. This may include information such as your IP address, browser type and language, pages viewed, the date and time. This data is used for ensuring the stability of our provided services and is deleted automatically after seven days.

                            We respect and are committed to protecting your privacy. We do not sell or otherwise provide personal information to other companies for the marketing of their own products or services. We will retain your personal information for as long as your account is active or as needed to provide you services or as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.

                            We reserve the right to disclose your personal information as required by law (e.g., to comply with a subpoena, warrant, or court order) and when we believe that disclosure is necessary to protect our rights, avoid litigation, protect your safety or the safety of others, investigate fraud, and/or respond to a government request. We may also disclose information about you if we determine that such disclosure should be made for
                            reasons of national security, law enforcement, or other issues of public importance.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">Cookies</h3>
                    <div class="uk-accordion-content">
                        <p>
                            A cookie is a small file containing a string of characters that is sent to your
                            computer when you visit a website. When you visit the website again, the cookie
                            allows that site to recognize your browser. Cookies are used on TiCON System Ltd to store
                            visitor preferences and other technical information required for the functionality of
                            the Website. No personal information is stored in these cookies. You can reset your
                            browser to refuse all cookies or to indicate when a cookie is being sent. However,
                            some website features or services may not function properly without cookies.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">Persons under 16</h3>
                    <div class="uk-accordion-content">
                        <p>TiCON System Ltd is not marketed toward persons under the age of 16.
                            If we discover that personal information was inadvertently
                            collected about individuals under the age 16, we
                            will promptly delete such information.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">Third-party service-based information</h3>
                    <div class="uk-accordion-content">
                        <p>
                            TiCON System Ltd is a participant in the Amazon Services LLC Associates Program,
                            an affiliate advertising program designed to provide a
                            means for sites to earn advertising fees by advertising and linking to Amazon.com.
                        </p>
                    </div>
                </li>
                <li>
                    <h3 class="uk-accordion-title">Google Analytics</h3>
                    <div class="uk-accordion-content">
                        <p>

                            This website uses Google Analytics, a web analytics service provided by Google, Inc. (Google).
                            Google Analytics uses "cookies", which are text files placed on your computer, to help the website analyze
                            how users use the site. The information generated by the cookie about your use of the website (including your
                            IP address) will be transmitted to and stored by Google on servers in the United States. In case of activation
                            of the IP anonymization, Google will truncate/anonymize the last octet of the IP address for Member States of
                            the European Union as well as for other parties to the Agreement on the European Economic Area. Only in
                            exceptional cases, the full IP address is sent to and shortened by Google servers in the USA. On behalf of
                            the website provider Google will use this information for the purpose of evaluating your use of the website,
                            compiling reports on website activity for website operators and providing other services relating to website
                            activity and internet usage to the website provider. Google will not associate your IP address with any other
                            data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser.
                            However, please note that if you do this, you may not be able to use the full functionality of this website.
                            Furthermore you can prevent Google's collection and use of data (cookies and IP address)
                            by downloading and installing the browser plug-in available under https://tools.google.com/dlpage/gaoptout.
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