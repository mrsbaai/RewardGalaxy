@component('mail::message')
Hello,

Welcome to RewardGalaxy! Login to your account to track your coins, and request rewards.

Here is your login info:

Email: {{$email}}
Password: {{$password}}


@component('mail::button', ['url' => 'https://rewardgalaxy.com/login'])
        Login Here
@endcomponent

You have any questions? <a href="http://rewardgalaxy.com/contact">We're here to help</a>.

Have Fun!<br>
RewardGalaxy Team

@endcomponent
