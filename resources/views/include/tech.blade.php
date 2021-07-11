<div class="txt-tec">เทคนิคพัฒนา</div>
<div class="txt-front">front-end</div>
<div class="overflow-hidden">
    @forelse($list->techs as $tech)
        @if($tech->type == 1)
            <div class="box-icon-vejs float-left mr-2 mb-3">
                <div class="vejs-pad">
                    @if($tech->tech == 'PHP')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/php.png') }}" alt="android">
                    @elseif($tech->tech == 'Android Studio')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/android.png') }}" alt="android">
                    @elseif($tech->tech == 'Bootstrap')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/boostrap.png') }}" alt="boostrap">
                    @elseif($tech->tech == 'CSS')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/css.png') }}" alt="css">
                    @elseif($tech->tech == 'Flutter')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/flutter.png') }}" alt="flutter">
                    @elseif($tech->tech == 'HTML')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/html.png') }}" alt="html">
                    @elseif($tech->tech == 'JS')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/javascript.png') }}" alt="javascript">
                    @elseif($tech->tech == 'JSON')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/json.png') }}" alt="json">
                    @elseif($tech->tech == 'Laravel')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/laravel.png') }}" alt="laravel">
                    @elseif($tech->tech == 'Line' || $tech->tech == 'LineBot Designer')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/linebot.png') }}" alt="line">
                    @elseif($tech->tech == 'React')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/react.png') }}" alt="react">
                    @elseif($tech->tech == 'Swift' || $tech->tech == 'SwiftUI')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/swift.png') }}" alt="swift">
                    @elseif($tech->tech == 'Swift (objective-c)')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/obc.png') }}" alt="objective-c">
                    @elseif($tech->tech == 'Unity')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/unity.png') }}" alt="unity">
                    @elseif($tech->tech == 'Vue.JS')
                        <img width="50" height="50" src="{{ asset('resource/images/tech_icon/vue.png') }}" alt="vuejs">
                    @else
                        <div class="vejs-pad">
                            -
                        </div>
                    @endif
                </div>
            </div>
        @endif
    @empty
        <div class="vejs-pad">
            -
        </div>
    @endforelse
</div>
<div class="txt-front2 pt-3">BACK-END</div>
<div class="overflow-hidden">
@forelse($list->techs as $tech)
    @if($tech->type == 2)
        <div class="box-icon-vejs float-left mr-2 mb-3">
            <div class="vejs-pad">
                @if($tech->tech == 'PHP')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/php.png') }}" alt="android">
                @elseif($tech->tech == 'CI')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/codeigniter.png') }}" alt="android">
                @elseif($tech->tech == 'Dialogflow')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/dialogflow.png') }}" alt="boostrap">
                @elseif($tech->tech == 'HTML')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/html.png') }}" alt="html">
                @elseif($tech->tech == 'Java')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/java.png') }}" alt="javascript">
                @elseif($tech->tech == 'Laravel')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/laravel.png') }}" alt="laravel">
                @elseif($tech->tech == 'MySQL')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/mysql.png') }}" alt="line">
                @elseif($tech->tech == 'Python')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/python.png') }}" alt="react">
                @else
                    <div class="vejs-pad">
                        -
                    </div>
                @endif
            </div>
        </div>
    @endif
@empty
    <div class="vejs-pad">
        -
    </div>
@endforelse
</div>
<div class="txt-data pt-3">DATA COLLECTION</div>
<div class="overflow-hidden">
@forelse($list->techs as $tech)
    @if($tech->type == 3)
        <div class="box-icon-vejs float-left mr-2 mb-3">
            <div class="vejs-pad">
                @if($tech->tech == 'MongoDB')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/mongodb.png') }}" alt="android">
                @elseif($tech->tech == 'Firebase')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/firebase.png') }}" alt="line">
                @elseif($tech->tech == 'MySQL' || $tech->tech == 'MySQL workbench')
                    <img width="50" height="50" src="{{ asset('resource/images/tech_icon/mysql.png') }}" alt="line">
                @else
                    <div class="vejs-pad">
                        -
                    </div>
                @endif
            </div>
        </div>
    @endif
@empty
    <div class="vejs-pad">
        -
    </div>
@endforelse
</div>
{{--<div class="txt-other pt-4" style="width: 100px">OTHER</div>--}}
{{--<div class="box-icon-vejs">--}}
{{--    <div class="vejs-pad">--}}
{{--        ---}}
{{--    </div>--}}
{{--</div>--}}
