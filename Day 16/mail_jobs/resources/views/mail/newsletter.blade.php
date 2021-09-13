<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body style="background-color:#e3e3e3">
    <table
        cellpadding="0"
        cellspacing="0"
        width="100%"
        height="100%"
        role="presentation">
        <tr align="center">
            <td>
                <table
                    cellpadding="0"
                    cellspacing="0"
                    width="650px"
                    height="auto"
                    style="background-color: #FFFF;">
                    <tr align="center">
                        <td>
                            <h1>
                                {!!
                                    isset($msg) ?
                                       $msg :
                                       'Message from Philipine Army'
                                !!}
                            </h1>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <img width="100%" src="https://www.army.mil.ph/home/images/2020/FEATURED_STORIES/true-story-of-valor1.jpg" alt="">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <h1>Outnumbered but Undaunted: <br>A True Story of Valor</h1>
                        </td>
                    </tr>
                    <tr align="justify">
                        <td>
                            <p style="padding: 5%">
                                Sometime in April 1990, a certain farmer and his family was harassed by a group belonging to the New People’s Army in Murcia, Negros Occidental Province. Feeling helpless about the injustice he experienced, he approached a Special Forces Company headed by a young captain and informed the soldiers about the presence of the rebels in the area. With the help of the farmer serving as guide, the company commander, Captain Arturo Ortiz immediately formulated a plan to locate the enemy.
                                <br><br>
                                On April 6th, then Captain Ortiz led 24 soldiers and 36 Citizen Armed Force Geographical Unit (CAFGU) personnel on an exhausting 11-hour cross-country trek to conduct a raid on a massive NPA training ground. After climbing a steep cliff, Ortiz and his men were able to position themselves on a favorable location as they could fully observe more than 200 rebels holding their graduation ceremony.
                                <br><br>
                                Relying on the element of surprise, he then directed the troops move as close as possible to the training ground’s peripheral and also reminded them to spare the civilians in the area before launching the attack. Though outnumbered by the enemy, Captain Ortiz gave the signal to strike at the enemy. Positioning himself from one team to another to coordinate the attack. During the intense firefight, he ran to the group of civilians huddled together in an effort to protect them from the hail of gunfire.
                                When the gun battle ended after two hours, 85 rebels lay dead as their surviving comrades fled the area. The military also seized 33 high-powered-firearms, 21 rifle grenades, several hand grenades, and 5 two-way radios. Remarkably, there was no casualty on the side of the government forces or the civilians during the encounter.
                                <br><br>
                                For his audacity, Captain Ortiz was awarded the Medal for Valor – the highest military honor for his conspicuous deed of bravery beyond the call of duty. He proved that he is a man of courage and determination in combat, displaying exceptional heroism and leadership in the finest standards of Filipino soldiery.
                                <br><br>
                                Up until today, the heroic feat of Captain Ortiz is recognized as one of the most successful military operations in the history of the Philippine Army.
                                This act of heroism was interpreted in a movie entitled “Kagitingan: A True Story of Valor” by Vishnu Productions and is officially selected by the International Film Festival Manhattan 2020, along with films from other countries including the USA, Canada, Bulgaria, Estonia, India, Japan, Columbia, Spain, Italy, China, Russia, Austria, and Switzerland.#
                            </p>
                        </td>
                    </tr>
                    <tr style="width:100%;" align="center">
                        <td
                            style="background:black; width:100%;padding:10%">
                            <img
                                width="100%"
                                src="https://www.army.mil.ph/home/images/logo/pa-logo.png" alt="">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
