<?php

    $animate_css_file = 'servers/css/animate.min.css';
    $css_file = 'servers/css/style.css';
    
    $animate_css_version = filemtime($animate_css_file);
    $css_version = filemtime($css_file);
?>
<link rel="stylesheet" href="<?php echo $animate_css_file; ?>?v=<?php echo $animate_css_version; ?>">
<link rel="stylesheet" href="<?php echo $css_file; ?>?v=<?php echo $css_version; ?>">

<div class="container">
    <section id="servers" class="servers">
        <div class="row justify-content-center">
            <?php foreach($servers as $serverId => $server) { ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="server animate__animated animate__fadeIn">
                        <?php if($config['lastWiped']['enabled'] == 'yes' && $server['wiped']) { ?>
                            <div class="ribbon"><span><?php echo $config['lastWiped']['text']; ?></span></div>
                        <?php } ?>
                        <div class="server-image-container">
                            <img class="server-image img-fluid" src="<?php echo $server['image']; ?>" alt="<?php echo $server['name']; ?> Server Image" title="<?php echo $server['name']; ?>">
                            <div class="server-image-overlay"></div>
                        </div>
                        <div class="server-container">
                            <span class="server-name"><?php echo $server['name']; ?></span>
                            <span class="server-description"><?php echo $server['map']; ?></span>
                            <div class="server-tags">
                                <?php foreach($server['tags'] as $tag) { ?>
                                    <span class="server-tag"><?php echo $tag; ?></span>
                                <?php } ?>
                            </div>
                            <?php if($server['online'] === true) { ?>
                                <span class="server-players">
                                    <?php echo $server['players']; ?> / <?php echo $server['maxPlayers']; ?> <?php if($server['queuedPlayers'] > 0) { echo '('.$server['queuedPlayers'].')'; } ?> players
                                    </span>
                                <div class="progress">
                                    <div class="progress-bar bg-rust" role="progressbar" aria-label="Amount of players" aria-valuemin="<?php echo $server['playersPercentage']; ?>" aria-valuemax="<?php echo $server['maxPlayers']; ?>" style="width: <?php echo $server['playersPercentage']; ?>%"></div>
                                </div>
                            <?php } else { ?>
                                <div class="server-message">
                                    <div class="server-offline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        El servidor está actualmente offline
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($server['online'] === true) { ?>
                                <a href="steam://connect/<?php echo $server['ip'] . ':' . $server['port']; ?>" title="Conectar via Steam" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Conectar
                                </a>
                            <?php } ?>
                            <?php if($server['store'] != '') { ?>
                                <a href="<?php echo $server['store']; ?>" target="_blank" title="Tienda" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Tienda
                                </a>
                            <?php } ?>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#server<?php echo $serverId; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Info
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php foreach($servers as $serverId => $server) { ?>
        <div class="modal fade modal-rust" id="server<?php echo $serverId; ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="server-image-modal-container">
                            <img class="server-image-modal img-fluid" src="<?php echo $server['image']; ?>" alt="<?php echo $server['name']; ?> Server Image" title="<?php echo $server['name']; ?>">
                            <div class="server-image-modal-overlay"></div>
                        </div>
                        <div class="server-modal-details">
                            <span class="server-name"><?php echo $server['name']; ?></span>
                            <span class="server-description">
                                <?php echo $server['map']; ?>
                                <?php if($server['online'] === true) { ?>
                                    - <?php echo $server['players']; ?>/<?php echo $server['maxPlayers']; ?> <?php if($server['queuedPlayers'] > 0) { echo '('.$server['queuedPlayers'].')'; } ?>
                                <?php } ?>
                            </span>
                            <span class="server-rules"><?php echo $server['description']; ?></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php if($server['battlemetrics'] != '') { ?>
                        <a href="<?php echo $server['battlemetrics']; ?>" target="_blank" title="BattleMetrics" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            BattleMetrics
                        </a>
                        <?php } ?>
                        <?php if($server['store'] != '') { ?>
                        <a href="<?php echo $server['store']; ?>" target="_blank" title="Tienda" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Tienda
                        </a>
                        <?php } ?>
                        <?php if($server['online'] === true) { ?>
                            <a href="steam://connect/<?php echo $server['ip'] . ':' . $server['port']; ?>" title="Conectar via Steam" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                Conectar
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<!-- Scripts -->
<?php
    $bootstrap_js_file = 'servers/js/bootstrap.bundle.min.js';
    $linkify_js_file = 'servers/js/linkify.min.js';
    $linkify_element_js_file = 'servers/js/linkify-element.min.js';

    $bootstrap_js_version = filemtime($bootstrap_js_file);
    $linkify_js_version = filemtime($linkify_js_file);
    $linkify_element_js_version = filemtime($linkify_element_js_file);
?>
<script src="<?php echo $bootstrap_js_file; ?>?v=<?php echo $bootstrap_js_version; ?>"></script>
<script src="<?php echo $linkify_js_file; ?>?v=<?php echo $linkify_js_version; ?>"></script>
<script src="<?php echo $linkify_element_js_file; ?>?v=<?php echo $linkify_element_js_version; ?>"></script>
<!-- End Scripts -->