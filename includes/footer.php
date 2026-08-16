<?php
/**
 * ============================================================
 *  FOOTER / LAYOUT (abajo) — SABINO COMPU SERVICE
 * ============================================================
 *  Plantilla común reescrita en PHP nativo (sin WordPress).
 * ============================================================
 */

$SITE = site_config();
$wa_number = preg_replace('/[^0-9]/', '', $SITE['whatsapp'] ?? $SITE['phone_link'] ?? '');
$wa_base_msg = $SITE['whatsapp_msg'] ?? 'Hola, quiero solicitar un presupuesto.';
$email = $SITE['email'] ?? '';
?>

<footer id="footer-section" role="contentinfo">
    <div class="container">
        <div class="row footer-info-row">
            <div class="col-lg-4 col-md-6 single-footer-1">
                <div class="footer-brand">
                    <h3><?php echo esc($SITE['site_name']); ?></h3>
                    <p><?php echo esc($SITE['site_tagline']); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-2">
                <h3>Contacto</h3>
                <p>
                    <a href="tel:<?php echo esc(preg_replace('/[^0-9+]/', '', $SITE['phone_link'])); ?>">
                        <i class="fas fa-phone" aria-hidden="true"></i> <?php echo esc($SITE['phone']); ?>
                    </a><br>
                    <a href="mailto:<?php echo esc($SITE['email']); ?>">
                        <i class="far fa-envelope" aria-hidden="true"></i> <?php echo esc($SITE['email']); ?>
                    </a>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-3">
                <h3>Horario</h3>
                <p>
                    <i class="fa-regular fa-clock"></i> <?php echo esc($SITE['timing_heading']); ?><br>
                    <b><?php echo esc($SITE['timing']); ?></b>
                </p>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p><?php echo esc($SITE['footer_copy']); ?></p>
    </div>
</footer>

<!-- Modal: Solicitar presupuesto (WhatsApp / Email) -->
<div id="contact-modal" class="contact-modal" hidden aria-hidden="true">
    <div class="contact-modal__backdrop js-contact-close" tabindex="-1"></div>
    <div class="contact-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="contact-modal-title">
        <button type="button" class="contact-modal__close js-contact-close" aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>
        <h3 id="contact-modal-title">Solicitar presupuesto</h3>
        <p class="contact-modal__text">Elegí cómo querés contactarnos:</p>
        <p id="contact-modal-service" class="contact-modal__service" hidden></p>
        <div class="contact-modal__actions">
            <a id="contact-wa-btn" class="contact-modal__btn contact-modal__btn--wa" href="#" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <a id="contact-mail-btn" class="contact-modal__btn contact-modal__btn--mail" href="mailto:<?php echo esc($email); ?>">
                <i class="far fa-envelope"></i> Enviar email
            </a>
            <a id="contact-gmail-btn" class="contact-modal__btn contact-modal__btn--gmail" href="#" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-google"></i> Abrir Gmail
            </a>
        </div>
    </div>
</div>

<!-- Lightbox: logo ampliado -->
<div id="logo-lightbox" class="logo-lightbox" hidden aria-hidden="true">
    <div class="logo-lightbox__backdrop js-logo-close" tabindex="-1"></div>
    <div class="logo-lightbox__content">
        <button type="button" class="logo-lightbox__close js-logo-close" aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>
        <img src="<?php echo esc($SITE['logo']); ?>" alt="<?php echo esc($SITE['site_name']); ?>">
    </div>
</div>

<style>
.contact-modal {
    position: fixed;
    inset: 0;
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 16px;
}
.contact-modal[hidden] { display: none !important; }
.contact-modal__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(9, 27, 47, 0.72);
}
.contact-modal__dialog {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 16px;
    padding: 28px 24px 24px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
    text-align: center;
}
.contact-modal__close {
    position: absolute;
    top: 10px;
    right: 12px;
    border: 0;
    background: transparent;
    color: #091b2f;
    font-size: 20px;
    cursor: pointer;
    line-height: 1;
    padding: 6px;
}
.contact-modal__dialog h3 {
    margin: 0 0 8px;
    color: #091b2f;
    font-size: 22px;
    font-weight: 800;
}
.contact-modal__text {
    margin: 0 0 10px;
    color: #333;
    font-size: 15px;
}
.contact-modal__service {
    margin: 0 0 16px;
    color: #0066FF;
    font-size: 14px;
    font-weight: 600;
}
.contact-modal__actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.contact-modal__btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 18px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none !important;
    transition: transform 0.15s ease, opacity 0.15s ease;
}
.contact-modal__btn:hover { transform: translateY(-1px); opacity: 0.95; color: #fff; }
.contact-modal__btn--wa {
    background: #25D366;
    color: #fff !important;
}
.contact-modal__btn--mail {
    background: #091b2f;
    color: #fff !important;
}
.contact-modal__btn--gmail {
    background: #ea4335;
    color: #fff !important;
}
.contact-modal__btn i { font-size: 20px; }
body.contact-modal-open { overflow: hidden; }

/* ===== Lightbox del logo ===== */
.logo-lightbox {
    position: fixed;
    inset: 0;
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.logo-lightbox[hidden] { display: none; }
.logo-lightbox__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.85);
}
.logo-lightbox__content {
    position: relative;
    z-index: 1;
    max-width: 90vw;
    max-height: 90vh;
}
.logo-lightbox__content img {
    display: block;
    max-width: 90vw;
    max-height: 85vh;
    width: auto;
    height: auto;
    border-radius: 12px;
}
.logo-lightbox__close {
    position: absolute;
    top: -44px;
    right: 0;
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    line-height: 1;
}
.logo-lightbox__close:hover { background: rgba(255, 255, 255, 0.35); }
body.logo-lightbox-open { overflow: hidden; }
</style>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.superfish.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/headerstaranimation.js"></script>
<script src="assets/js/aboutslide.js"></script>
<script>
(function () {
    var modal = document.getElementById('contact-modal');
    if (!modal) return;

    var waBtn = document.getElementById('contact-wa-btn');
    var mailBtn = document.getElementById('contact-mail-btn');
    var gmailBtn = document.getElementById('contact-gmail-btn');
    var serviceEl = document.getElementById('contact-modal-service');
    var waNumber = <?php echo json_encode($wa_number); ?>;
    var waBaseMsg = <?php echo json_encode($wa_base_msg); ?>;
    var emailTo = <?php echo json_encode($email); ?>;

    function buildLinks(service) {
        var msg = waBaseMsg;
        var subject = 'Solicitud de presupuesto';
        if (service) {
            msg = waBaseMsg + ' Servicio: ' + service;
            subject = 'Presupuesto: ' + service;
        }
        waBtn.href = 'https://wa.me/' + waNumber + '?text=' + encodeURIComponent(msg);

        // Cliente de correo predeterminado del sistema
        var mailHref = 'mailto:' + emailTo
            + '?subject=' + encodeURIComponent(subject)
            + '&body=' + encodeURIComponent(msg);
        mailBtn.setAttribute('href', mailHref);

        // Respaldo web (siempre funciona en el navegador)
        if (gmailBtn) {
            gmailBtn.href = 'https://mail.google.com/mail/?view=cm&fs=1'
                + '&to=' + encodeURIComponent(emailTo)
                + '&su=' + encodeURIComponent(subject)
                + '&body=' + encodeURIComponent(msg);
        }

        if (service) {
            serviceEl.hidden = false;
            serviceEl.textContent = 'Servicio: ' + service;
        } else {
            serviceEl.hidden = true;
            serviceEl.textContent = '';
        }
    }

    function openModal(service) {
        buildLinks(service || '');
        modal.hidden = false;
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('contact-modal-open');
    }

    function closeModal() {
        modal.hidden = true;
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('contact-modal-open');
    }

    // No bloquear el mailto nativo: el navegador abre la app de correo del dispositivo
    mailBtn.addEventListener('click', function () {
        setTimeout(closeModal, 150);
    });
    if (gmailBtn) {
        gmailBtn.addEventListener('click', function () {
            setTimeout(closeModal, 150);
        });
    }

    document.addEventListener('click', function (e) {
        var openBtn = e.target.closest('.js-contact-open, a[href="#contactar"]');
        if (openBtn) {
            e.preventDefault();
            openModal(openBtn.getAttribute('data-service') || '');
            return;
        }
        if (e.target.closest('.js-contact-close')) {
            e.preventDefault();
            closeModal();
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.hidden) closeModal();
    });
})();
</script>

<script>
(function () {
    var lightbox = document.getElementById('logo-lightbox');
    if (!lightbox) return;

    function open() {
        lightbox.hidden = false;
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('logo-lightbox-open');
    }
    function close() {
        lightbox.hidden = true;
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('logo-lightbox-open');
    }

    document.addEventListener('click', function (e) {
        var logoLink = e.target.closest('.site-logo a');
        if (logoLink) {
            e.preventDefault();
            open();
            return;
        }
        if (e.target.closest('.js-logo-close')) {
            close();
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !lightbox.hidden) close();
    });
})();
</script>

</body>
</html>
