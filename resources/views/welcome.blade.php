<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto Escola</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    <div>
        <div x-show="fullscreenModal" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex fixed inset-0 z-[99] w-screen h-screen bg-white">
            <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
                <p class="absolute bottom-0 left-2 mb-4 mr-4 text-sm font-medium">Vinicius José© 2024. All rights
                    reserved.</p>

                <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="z-10 object-cover w-full h-full" data-name="Layer 1"
                    width="744" height="539.28592" viewBox="0 0 744 539.28592"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M702.11417,584.643v130H376.41542c-37.109,0-67.30125-29.15983-67.30125-65s30.19221-65,67.30125-65Z"
                        transform="translate(-228 -180.35704)" fill="#f2f2f2" />
                    <path
                        d="M710.11417,713.643a5.002,5.002,0,0,1-5,5h-334.5a68.5,68.5,0,1,1,0-137h334.5a5,5,0,0,1,0,10h-334.5a58.5,58.5,0,1,0,0,117h334.5A5.002,5.002,0,0,1,710.11417,713.643Z"
                        transform="translate(-228 -180.35704)" fill="#0094ff" />
                    <path d="M702.11417,614.643h-350a1,1,0,1,1,0-2h350a1,1,0,0,1,0,2Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path d="M702.11417,638.643h-350a1,1,0,1,1,0-2h350a1,1,0,0,1,0,2Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path d="M702.11417,662.643h-350a1,1,0,1,1,0-2h350a1,1,0,0,1,0,2Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path d="M702.11417,686.643h-350a1,1,0,1,1,0-2h350a1,1,0,0,1,0,2Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M953.83158,609.11391,872.26685,710.34235,618.65167,505.99212c-28.89608-23.283-34.11066-64.9324-11.62379-92.84043s64.29244-31.671,93.18852-8.388Z"
                        transform="translate(-228 -180.35704)" fill="#f2f2f2" />
                    <path
                        d="M879.12372,714.583a5.002,5.002,0,0,1-7.03051.7563L611.62467,505.467a68.5,68.5,0,0,1,85.95667-106.6792L958.04988,608.66014a5,5,0,1,1-6.27421,7.7868L691.30713,406.57463a58.5,58.5,0,1,0-73.40825,91.10558L878.36742,707.55253A5.002,5.002,0,0,1,879.12372,714.583Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M935.009,632.47432,662.47086,412.877a1,1,0,1,1,1.25485-1.55736L936.26379,630.917a1,1,0,1,1-1.25484,1.55736Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M919.95085,651.16265,647.41276,431.56531a1,1,0,0,1,1.25484-1.55736L921.20569,649.60529a1,1,0,1,1-1.25484,1.55736Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M904.89274,669.851,632.35466,450.25364a1,1,0,0,1,1.25484-1.55737L906.14759,668.29361a1,1,0,1,1-1.25485,1.55736Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M889.83464,688.5393,617.29655,468.942a1,1,0,1,1,1.25485-1.55736L891.08948,686.98194a1,1,0,1,1-1.25484,1.55736Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path d="M971,719.643H229a1,1,0,0,1,0-2H971a1,1,0,0,1,0,2Z" transform="translate(-228 -180.35704)"
                        fill="#ccc" />
                    <polygon points="338.081 390.622 326.649 390.621 321.212 346.525 338.085 346.527 338.081 390.622"
                        fill="#ffb8b8" />
                    <path
                        d="M318.48241,387.35454h22.04781a0,0,0,0,1,0,0v13.88195a0,0,0,0,1,0,0H304.60048a0,0,0,0,1,0,0v0A13.88193,13.88193,0,0,1,318.48241,387.35454Z"
                        fill="#2f2e41" />
                    <polygon points="221.286 390.622 209.854 390.621 204.417 346.525 221.29 346.527 221.286 390.622"
                        fill="#ffb8b8" />
                    <path
                        d="M201.68787,387.35454h22.04781a0,0,0,0,1,0,0v13.88195a0,0,0,0,1,0,0H187.80594a0,0,0,0,1,0,0v0A13.88193,13.88193,0,0,1,201.68787,387.35454Z"
                        fill="#2f2e41" />
                    <path
                        d="M487.47085,243.89011v-5.00006a32.25,32.25,0,0,1,32.25-32.25h.00006a32.25,32.25,0,0,1,32.25,32.25v5.00006a23.25,23.25,0,0,1-23.25,23.25h-18A23.25,23.25,0,0,1,487.47085,243.89011Z"
                        transform="translate(-228 -180.35704)" fill="#2f2e41" />
                    <circle cx="291.72085" cy="63.94249" r="24.56103" fill="#ffb8b8" />
                    <path d="M634.4877,376.4751" transform="translate(-228 -180.35704)" fill="#ffb8b8" />
                    <path
                        d="M386.12458,328.7126A9.377,9.377,0,0,1,400.40486,330.39l21.05462-3.98267,5.5409,12.20454-29.8122,5.2067a9.42779,9.42779,0,0,1-11.0636-15.106Z"
                        transform="translate(-228 -180.35704)" fill="#ffb8b8" />
                    <path
                        d="M500.57256,284.32827l.27536.41722L466.3221,307.48986l-58.25831,18.60329a3.5078,3.5078,0,0,0-2.412,3.73827l1.2709,10.94662a3.50073,3.50073,0,0,0,4.21024,3.01849l54.82973-11.75277a19.80593,19.80593,0,0,0,7.37148-3.24548L512.122,301.20139a10.01984,10.01984,0,0,0,4.1584-8.94749,9.9752,9.9752,0,0,0-15.43253-7.50841Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M554.85319,558.46572a4.51847,4.51847,0,0,1-4.1377-2.70118l-52.40991-129.501a1.49982,1.49982,0,0,0-2.80859.1582L452.73868,552.4955a4.50087,4.50087,0,0,1-5.88159,2.89111l-14.33838-5.37695a4.48887,4.48887,0,0,1-2.897-3.70459c-6.45044-56.19238,49.80005-198.02978,50.36914-199.45556l.15747-.395,51.2771,11.34277.10669.11621c20.45777,22.31787,37.27344,163.082,40.43677,191.07373a4.47857,4.47857,0,0,1-2.97119,4.74658l-12.65625,4.47608A4.45661,4.45661,0,0,1,554.85319,558.46572Z"
                        transform="translate(-228 -180.35704)" fill="#2f2e41" />
                    <path
                        d="M510.67252,362.36269c-12.42358,0-26.27441-2.477-30.53784-12.70068l-.09814-.23487.13256-.21777c3.36524-5.52149,7.813-14.94043,5.42237-16.7085-4.70923-3.48193-6.99439-9.21-6.79151-17.02539.44043-16.96582,12.00049-32.02881,28.76587-37.48242h.00025A127.64221,127.64221,0,0,1,521.829,274.3207a24.28073,24.28073,0,0,1,20.13257,4.97168,24.5264,24.5264,0,0,1,9.09594,18.8706c.17578,18.13086-2.61548,43.3833-16.91211,60.72022a4.44777,4.44777,0,0,1-2.633,1.53125A122.223,122.223,0,0,1,510.67252,362.36269Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M506.05111,361.68381a9.55593,9.55593,0,0,1,11.67847-6.66417,9.40742,9.40742,0,0,1,1.44781.53625l15.98666-14.54884,11.118,7.49027-22.86179,20.23092a9.53906,9.53906,0,0,1-10.81319,4.58661A9.39418,9.39418,0,0,1,506.05111,361.68381Z"
                        transform="translate(-228 -180.35704)" fill="#ffb8b8" />
                    <path
                        d="M532.63175,361.86855a4.48762,4.48762,0,0,1-2.84546-1.01514l-6.30444-5.15185a4.49995,4.49995,0,0,1,.10913-7.05518l26.44165-20.27978a1.50334,1.50334,0,0,0,.28345-2.09473L533.99577,304.6957a13.28507,13.28507,0,0,1,.88745-17.11426h0a13.24793,13.24793,0,0,1,17.88769-1.43067l.10327.10889,17.042,24.40235a15.19267,15.19267,0,0,1-.36011,24.18554l-34.24561,26.13867A4.50736,4.50736,0,0,1,532.63175,361.86855Z"
                        transform="translate(-228 -180.35704)" fill="#ccc" />
                    <path
                        d="M497.96524,237.39008V225.20393l21.75561-9.5,20.74439,9.5v12.18615a2,2,0,0,1-2,2h-38.5A2,2,0,0,1,497.96524,237.39008Z"
                        transform="translate(-228 -180.35704)" fill="#2f2e41" />
                    <path
                        d="M518.72211,208.25668c-3.19879-10.23852,3.51931-21.97233,13.45085-26.025s21.81344-1.21974,30.19368,5.47588,13.57963,16.72441,16.33459,27.09118,3.27788,21.17682,3.7865,31.89135c12.20223,2.24139,20.50283,16.71428,16.27576,28.37833s-19.87268,17.45879-30.67781,11.3623-13.93468-22.48461-6.13639-32.1337a26.37385,26.37385,0,0,0-30.68776-40.9097C525.24773,215.90224,517.702,209.36793,518.72211,208.25668Z"
                        transform="translate(-228 -180.35704)" fill="#2f2e41" />
                    <path
                        d="M381.61417,281.43984a104.44868,104.44868,0,0,1-42.34814-9.2749,4.47254,4.47254,0,0,1-2.65186-4.104V231.643a4.505,4.505,0,0,1,4.5-4.5h81a4.50508,4.50508,0,0,1,4.5,4.5v36.418a4.47272,4.47272,0,0,1-2.65185,4.104h0A104.44869,104.44869,0,0,1,381.61417,281.43984Z"
                        transform="translate(-228 -180.35704)" fill="#0094ff" />
                    <path
                        d="M381.60306,251.93691a4.50521,4.50521,0,0,1-1.74865-.35156l-64.23194-27.09961a4.49965,4.49965,0,0,1,.15308-8.353L380.00834,191.765a4.48365,4.48365,0,0,1,3.2113.00684l63.37207,24.36767a4.50012,4.50012,0,0,1,.15406,8.3379L383.373,251.57656A4.507,4.507,0,0,1,381.60306,251.93691Z"
                        transform="translate(-228 -180.35704)" fill="#0094ff" />
                    <circle cx="116.11417" cy="88.28592" r="6" fill="#3f3d56" />
                    <path
                        d="M446.96476,220.63082,383.59171,247.73a3.99993,3.99993,0,0,1-3.12744.00757l-64.23193-27.09882a3.92451,3.92451,0,0,1-1.9126-1.68109,3.997,3.997,0,0,0,1.9126,5.68109l64.23193,27.09882a3.99993,3.99993,0,0,0,3.12744-.00757l63.37305-27.09918a3.99713,3.99713,0,0,0,1.89453-5.67322A3.92676,3.92676,0,0,1,446.96476,220.63082Z"
                        transform="translate(-228 -180.35704)" opacity="0.2" />
                    <path
                        d="M344.61832,268.61952a1,1,0,0,0,1-1V234.1581l32.9812-12.01514a1.00011,1.00011,0,0,0,.02979-2l-32.9812,12.01514a1.96167,1.96167,0,0,0-1.43335.57519,1.98569,1.98569,0,0,0-.59644,1.42481v33.46142A1.00005,1.00005,0,0,0,344.61832,268.61952Z"
                        transform="translate(-228 -180.35704)" fill="#3f3d56" />
                </svg>
            </div>
            <div class="relative flex flex-wrap items-center w-full h-full px-8">

                <div class="relative w-full max-w-sm mx-auto lg:mb-0">
                    <div class="relative text-center">

                        <div class="flex flex-col mb-6 space-y-2">
                            <h1 class="text-2xl font-semibold tracking-tight">Entre na sua conta</h1>
                            <p class="text-sm text-neutral-500">Digite seu e-mail e sua senha para criar sua conta.</p>
                        </div>
                        <form onsubmit="event.preventDefault();" class="space-y-2">
                            <input type="text" placeholder="name@example.com"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
                            <input type="text" placeholder="example123"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
                            <button type="button"
                                class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-blue-500 hover:bg-blue-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                Criar conta
                            </button>
                            <div class="relative py-6">
                                <div class="absolute inset-0 flex items-center"><span class="w-full border-t"></span>
                                </div>
                                <div class="relative flex justify-center text-xs uppercase">
                                    <span class="px-2 bg-white text-neutral-500">Ou continue com</span>
                                </div>
                            </div>
                            <button
                                class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium border rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none border-input hover:bg-neutral-100"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 488 512" width="16" height="16" class="mr-2">
                                    <path
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                                <span>Google</span>
                            </button>
                        </form>
                    </div>
                    <p class="mt-6 text-sm text-center text-neutral-500">Já possui uma conta? <a href="#_"
                            class="relative font-medium text-blue-600 group"><span>Faça Login</span><span
                                class="absolute bottom-0 left-0 w-0 group-hover:w-full ease-out duration-300 h-0.5 bg-blue-600"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
