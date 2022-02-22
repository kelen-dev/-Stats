@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>
                    Entrer en contact
                </h2>
                <p class="text-muted">
                    si vous rencontrez des problèmes avec ce service,<a href="mailto:{{ config('kelens.admin_support_email') }}"> veuillez demander de l'aide.</a>
                </p>

                <form action="{{ route('contact.index') }}" method="POST">
                    @csrf
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Adresse mail</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="text" class="control-label sr-only">Message</label>
                        <textarea class="form-control" rows="10" cols="10" name="message" id="message"
                            required="required">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary btn-grad" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>

            <div class="col-md-4 mb-5 mb-md-0">
                <div class="banner">
                    <div class="banner-icon">
                        <i class="fas fa-info fa-2x mr-2"></i>
                    </div>
                    <div class="banner-title">
                        <h2 class="h3">INFORMATIONS</h2>
                    </div>
                </div>
                <div class="card" id="discord_widget">
                    <div class="card-header">
                        <h5>
                            <i class="fab fa-discord mr-2"></i>
                            Discord
                        </h5>
                    </div>
                    <div class="kelens-widget kelens-block" data-widget="kelens_discord_widget">
                        <div class="kelens-content">
                            <div class="kelens-usersDiscord"></div>
                            <div class="kelens-discordInfo">
                                <span class="kelens-js--discordCount"></span>
                                <a href="https://discord.kelens.fr" target="_blank" class="btn btn-primary btn-grad">
                                    Rejoindre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer>
        window.addEventListener("DOMContentLoaded", (event) => {

            // COMPTEUR DISCORD
            var discord_key = "766660674453110814";
            if ($('.kelens--js-discordCount').length && discord_key.length) {
                {{-- Si erreur --}}
                    window.onerror = function (msg, url, ln) {
                    return (msg === "Impossible de trouver la classe du compteur discord.");
                };

                {{-- Affiche du compte --}}
                $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
                    $('.kelens--js-discordCount').html(d.presence_count + " en ligne");
                });
            }

            // WIDGET DISCORD
            if ($('.kelens-js--discordCount').length && discord_key.length) {
                window.onerror = function (msg, url, ln) {
                    return (msg === "Impossible de trouver la classe.");
                };
                $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
                    $('.kelens-js--discordCount').html(d.presence_count + " en ligne");
                    d.members.forEach(function (mem) {
                        $('.kelens-widget[data-widget="kelens_discord_widget"] .kelens-content .kelens-usersDiscord')
                            .append(`
                        <div class="kelens-discordUser">
                            <div class="kelens-userImg" style="background-image:url(${mem.avatar_url})">
                                <div class="kelens-userStatus kelens-status-${mem.status}"></div>
                            </div>
                            <div class="kelens-username">${mem.username}</div>
                        </div>`);
                    });
                });
            }
        })
    </script>
@endsection
