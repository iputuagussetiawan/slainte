<?php
if ($args['card-team-image']) {
    $cardteamImage = $args['card-team-image'];
}

if ($args['card-team-title']) {
    $cardteamTitle = $args['card-team-title'];
}

if ($args['card-team-description']) {
    $cardteamDescription = $args['card-team-description'];
}

if ($args['card-team-position']) {
    $cardteamPosition = $args['card-team-position'];
}

if ($args['card-team-fb-link']) {
    $cardteamFB = $args['card-team-fb-link'];
}

if ($args['card-team-twt-link']) {
    $cardteamTwitter = $args['card-team-twt-link'];
}

if ($args['card-team-alcohol-lnk-link']) {
    $cardteamLinkedIn = $args['card-team-lnk-link'];
}
?>
<div class="card-team">
    <div class="card-team__image-container">
        <img src="<?= $cardteamImage; ?>" alt="" class="card-team__image">
    </div>
    <div class="card-team__info-container">
        <h4 class="card-team__title">
            <?= $cardteamTitle; ?>
        </h4>
        <p class="card-team__position"><?= $cardteamPosition; ?></p>
        <p class="card-team__description"><?= $cardteamDescription; ?>
        </p>

        <ul class="card-team__social-icon">
            <li class="card-team__social-item">
                <a href="<?= $cardteamFB; ?>" class="card-team__social-link">
                    <svg class="card-team__social-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 20.9877 5.11957 26.7796 11.8125 27.8299V18.0469H8.25781V14H11.8125V10.9156C11.8125 7.40688 13.9027 5.46875 17.1005 5.46875C18.6318 5.46875 20.2344 5.74219 20.2344 5.74219V9.1875H18.4691C16.73 9.1875 16.1875 10.2668 16.1875 11.375V14H20.0703L19.4496 18.0469H16.1875V27.8299C22.8804 26.7796 28 20.9877 28 14Z" fill="#867E6F" />
                    </svg>
                </a>
            </li>
            <li class="card-team__social-item">
                <a href="<?= $cardteamTwitter; ?>" class="card-team__social-link">
                    <svg class="card-team__social-icon" width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.80852 23.375C19.372 23.375 25.1513 14.6212 25.1513 7.03223C25.1513 6.78614 25.1459 6.53458 25.1349 6.28848C26.2592 5.47543 27.2294 4.46836 28 3.31458C26.9529 3.78043 25.8412 4.08467 24.7029 4.21692C25.9015 3.49845 26.799 2.36978 27.2289 1.04012C26.1013 1.70838 24.8682 2.17977 23.5823 2.43411C22.716 1.51355 21.5705 0.90403 20.323 0.699787C19.0754 0.495544 17.7954 0.707953 16.6807 1.30417C15.566 1.90039 14.6788 2.84722 14.1562 3.99826C13.6335 5.1493 13.5047 6.44044 13.7895 7.67208C11.5062 7.5575 9.27259 6.96438 7.23331 5.93118C5.19403 4.89797 3.39464 3.44774 1.9518 1.6745C1.21847 2.93885 0.994066 4.43498 1.3242 5.85883C1.65434 7.28269 2.51424 8.52742 3.72914 9.34004C2.81707 9.31109 1.92497 9.06552 1.12656 8.62364V8.69473C1.12575 10.0216 1.58445 11.3077 2.42469 12.3346C3.26494 13.3615 4.43488 14.0657 5.73562 14.3275C4.89073 14.5587 4.00398 14.5924 3.14398 14.426C3.51103 15.5671 4.22517 16.5651 5.18673 17.2808C6.1483 17.9965 7.30931 18.3941 8.50773 18.4182C6.47316 20.0164 3.95987 20.8832 1.37266 20.8791C0.913835 20.8784 0.455466 20.8503 0 20.7949C2.62833 22.4811 5.68579 23.3767 8.80852 23.375Z" fill="#867E6F" />
                    </svg>
                </a>
            </li>
            <li class="card-team__social-item">
                <a href="<?= $cardteamLinkedIn; ?>" class="card-team__social-link">
                    <svg class="card-team__social-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.9273 0H2.06719C0.924219 0 0 0.902344 0 2.01797V25.9766C0 27.0922 0.924219 28 2.06719 28H25.9273C27.0703 28 28 27.0922 28 25.982V2.01797C28 0.902344 27.0703 0 25.9273 0ZM8.30703 23.8602H4.15078V10.4945H8.30703V23.8602ZM6.22891 8.67344C4.89453 8.67344 3.81719 7.59609 3.81719 6.26719C3.81719 4.93828 4.89453 3.86094 6.22891 3.86094C7.55781 3.86094 8.63516 4.93828 8.63516 6.26719C8.63516 7.59062 7.55781 8.67344 6.22891 8.67344ZM23.8602 23.8602H19.7094V17.3633C19.7094 15.8156 19.682 13.8195 17.5492 13.8195C15.3891 13.8195 15.0609 15.5094 15.0609 17.2539V23.8602H10.9156V10.4945H14.8969V12.3211H14.9516C15.5039 11.2711 16.8602 10.1609 18.8781 10.1609C23.0836 10.1609 23.8602 12.9281 23.8602 16.5266V23.8602Z" fill="#867E6F" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>