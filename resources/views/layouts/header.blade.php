<!-- Navbar with margin and padding -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{route('lang-home-1')}}">{{ __('messages.Localiztion In Laravel') }}</a>
    <div class="container"> <!-- Wrap the navbar content in a container -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{ __('messages.HOME') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}">{{ __('messages.ABOUT US')}}</a>
                    <!-- <h1>{{ __('messages.ABOUT US')}}</h1> -->
                </li>

            </ul>

            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="jp" {{ session()->get('locale') == 'jp' ? 'selected' : '' }}>Japenese</option>
                    <!-- <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option> -->
                </select>

            </div>
        </div>
    </div>
</nav>



<!-- Bootstrap JS scripts (jQuery, Popper.js, Bootstrap JS) -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<script type="text/javascript">
    var url = "{{route('lang-change')}}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>

<!-- </html> -->