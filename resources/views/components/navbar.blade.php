@php
$user = auth()->user();
@endphp

<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-turbolinks="false" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <h1 class="font-weight-bold text-2xl text-white">{{ config('app.name', 'Laravel') }}</h1>
    </form>
    <ul class="navbar-nav navbar-right">

        <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <li class="drp[dpwm] relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <a href="#" class="nav-link dropdown-toggle nav-link-lg">
                                <div class="d-sm-none d-lg-inline-block">
                                    {{ Auth::user()->currentTeam->name }}
                                </div>
                            </a>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"  class="dropdown-item has-icon">
                                        <i class="fas fa-cog"></i> {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                              {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </li>
                @endif


        <li class="dropdown"><a href="#" data-turbolinks="false" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if (!is_null($user))
                <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->name }}</div></a>
            @else
                <div class="d-sm-none d-lg-inline-block">Hi, Welcome</div></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/user/profile" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                @if (request()->get('is_admin'))
                <a href="/setting" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Setting
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
