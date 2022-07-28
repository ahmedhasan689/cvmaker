<!DOCTYPE html>

<head lang="en" dir="ltr">

    <title>
        Select Theme
    </title>
    <x-style />
</head>

<body>
    <div class="container">
        <div class="row themeBox">
            <h5 class="col-md-12 my-3">
                إختر التصميم الذي ترغب به
            </h5>

            {{-- Select Theme Form After Auth --}}
            <form action="{{ route('theme.store') }}" method="POST">
                @csrf

                <div class="row my-3">
                        <label class="col-md-6">
                            <input type="radio" name="theme" value="theme-one" checked>
                            <img src="{{ asset('assets/img/theme-one.png') }}" alt="Option 1">
                        </label>

                        <label class="col-md-6">
                            <input type="radio" name="theme" value="theme-two">
                            <img src="{{ asset('assets/img/theme-two.png') }}" alt="Option 2">
                        </label>
                </div>
                <div>
                    <button class="btn btn-success my-3">
                        الأستمرار
                    </button>
                </div>

            </form>

        </div>
    </div>
    <x-script />
</body>
