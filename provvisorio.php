<?php
/**
 * Template Name: Landing Provvisoria Marostica
 */
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marostica Fotografia 1979</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome per le icone social -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --accent: #d32f2f;
            --bg: #0a0a0a;
            --text: #ffffff;
            --text-dim: #a0a0a0;
            --whatsapp: #25d366;
            --instagram: #e1306c;
            --facebook: #1877f2;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('marostica-fotografia-vetrina.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 8vw, 5rem);
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--accent);
            letter-spacing: 4px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 15px 35px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            scroll-behavior: smooth;
        }

        .btn-primary {
            background-color: var(--accent);
            color: white;
            border: 2px solid var(--accent);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--accent);
            transform: translateY(-3px);
        }

        .btn-outline {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background-color: white;
            color: black;
            transform: translateY(-3px);
        }

        /* Content Sections */
        .content-section {
            padding: 80px 5%;
            max-width: 900px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInUp 1s ease-out 0.15s forwards;
            opacity: 0;
            transform: translateY(50px);
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 15px;
        }

        /* Form */
        form {
            background: #161616;
            padding: 40px;
            border-radius: 15px;
            border: 1px solid #222;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            animation: fadeInUp 1s ease-out 0.3s forwards;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.3s ease;
        }

        form:hover {
            border-color: var(--accent);
            box-shadow: 0 20px 50px rgba(211, 47, 47, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.85rem;
            color: var(--text-dim);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input, textarea, select {
            width: 100%;
            padding: 14px;
            background: #000;
            border: 1px solid #333;
            color: white;
            border-radius: 8px;
            font-family: inherit;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: var(--accent);
            outline: none;
            background: #050505;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--accent);
            border: none;
            color: white;
            font-weight: 700;
            cursor: pointer;
            border-radius: 8px;
            text-transform: uppercase;
            transition: 0.3s;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            filter: brightness(1.2);
            transform: scale(1.01);
        }

        /* Social Section */
        .social-container {
            margin-top: 60px;
            text-align: center;
        }

        .social-title {
            font-size: 0.9rem;
            color: var(--text-dim);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .social-title::before, .social-title::after {
            content: '';
            height: 1px;
            width: 50px;
            background: #333;
        }

        .social-grid {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-btn {
            padding: 15px 25px;
            border-radius: 12px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid transparent;
            min-width: 160px;
            justify-content: center;
        }

        .social-btn i { font-size: 1.2rem; }

        .s-ig { background: rgba(225, 48, 108, 0.1); border-color: rgba(225, 48, 108, 0.3); color: var(--instagram); }
        .s-ig:hover { background: var(--instagram); color: white; transform: translateY(-5px); box-shadow: 0 10px 20px rgba(225, 48, 108, 0.3); }

        .s-wa { background: rgba(37, 211, 102, 0.1); border-color: rgba(37, 211, 102, 0.3); color: var(--whatsapp); }
        .s-wa:hover { background: var(--whatsapp); color: white; transform: translateY(-5px); box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3); }

        /* Footer */
        footer {
            text-align: center;
            padding: 60px 5%;
            border-top: 1px solid #1a1a1a;
            color: var(--text-dim);
            font-size: 0.75rem;
            background: #050505;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--accent);
            margin-bottom: 20px;
            display: block;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.8rem; }
            form { padding: 25px; }
            .social-btn { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <p>Passione,Arte e Cultura dal 1979</p>
        <h1>Marostica<br>Fotografia 1979</h1>
        <div class="cta-buttons">
            <a href="#iscrizione" class="btn btn-outline"><i class="fa-solid fa-envelope"></i> Scrivici</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section" id="iscrizione">
        <div class="section-header">
            <p>Utilizza il form qui sotto per iscriverti al prossimo Corso o per qualsiasi richiesta.</p>
        </div>

        <!-- Form con invio reale tramite Formspree -->
        <form action="https://formspree.io/f/info@marosticafotografia1979.it" method="POST">
            <div class="form-group">
                <label>Nome e Cognome</label>
                <input type="text" name="nome" placeholder="Mario Rossi" required>
            </div>
            
            <div class="form-group">
                <label>Indirizzo Email</label>
                <input type="email" name="_replyto" placeholder="esempio@email.com" required>
            </div>

            <div class="form-group">
                <label>Numero</label>
                <input type="number" name="_replyto" placeholder="123456789" required>
            </div>

            <div class="form-group">
                <label>Il tuo messaggio</label>
                <textarea name="messaggio" rows="5" placeholder="Scrivi qui..."></textarea>
            </div>

            <button type="submit" class="submit-btn">Invia Messaggio</button>
        </form>

        <!-- Social Section -->
        <div class="social-container">
            <div class="social-title">Social Media</div>
            <div class="social-grid">
                <a href="https://www.instagram.com/invites/contact/?igsh=1x8sasswho1ad&utm_content=txsw40z" target="_blank" class="social-btn s-ig">
                    <i class="fa-brands fa-instagram"></i> Instagram
                </a>
                <a href="https://wa.me/393452397740" target="_blank" class="social-btn s-wa">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </section>

    <footer>
        <span class="footer-logo">MF1979</span>
        <p>Corso Mazzini 77, 36063 Marostica (VI)</p>
        <p style="margin-top: 10px;">&copy; 2026 Marostica Fotografia 1979. Tutti i diritti riservati.</p>
    </footer>

    <script>
        // Intersection Observer per animazioni smooth al scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 1s ease-out forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Osserva la sezione del form
        const contentSection = document.querySelector('.content-section');
        if (contentSection) {
            contentSection.style.opacity = '0';
            contentSection.style.transform = 'translateY(50px)';
            observer.observe(contentSection);
        }
    </script>

</body>
</html>
