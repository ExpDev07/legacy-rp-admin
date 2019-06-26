<?php
//Starting Breadcrumbs

// BREADCRUMB::Index
Breadcrumbs::for('index', function ($trail) {
    $trail->push('Home', route('index'));
});

// BREADCRUMB::about
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('index');
    $trail->push('About', route('about'));
});

// BREADCRUMB::how-to-play
Breadcrumbs::for('how-to-play', function ($trail) {
    $trail->parent('index');
    $trail->push('How-To-Play', route('how-to-play'));
});

// BREADCRUMB::Players Section
Breadcrumbs::for('players', function ($trail) {
    $trail->parent('index');
    $trail->push('Players', route('players.index'));
});

Breadcrumbs::for('player', function ($trail, $player) {
    $trail->parent('players');
    $trail->push($player->name, route('players.show', $player));
});

// BREADCRUMB::Warnings Section
Breadcrumbs::for('player-create-warning', function ($trail, $player) {
    $trail->parent('player', $player);
    $trail->push('Warnings', route('players.warnings.index', $player));
});

Breadcrumbs::for('player-view-warning', function ($trail, $warning) {
    $trail->parent('player', $warning->player);
    $trail->push('Viewing Warning', route('warnings.show', $warning));
});

// BREADCRUMB::Logs Section
Breadcrumbs::for('player-view-logs', function ($trail, $player) {
    $trail->parent('player', $player);
    $trail->push('Viewing Player Logs', route('players.logs.index', $player));
});

// BREADCRUMB::Bans Section
Breadcrumbs::for('player-create-ban', function ($trail, $player) {
    $trail->parent('player', $player);
    $trail->push('Creating Ban', route('players.ban.create', $player));
});
