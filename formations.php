<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Formation Head Spa en ligne certifiante - Apprenez le protocole japonais professionnel à votre rythme">
<meta name="robots" content="index, follow">
<title>Formation Head Spa en ligne | Apprendre le Head Spa</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="images/6z9f45s3fdf.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
/* ==================== RESET & VARIABLES ==================== */
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
:root {
--primary:       #C97A93;
--primary-dark:  #b5607c;
--primary-light: #f0d0db;
--accent:        #352028;
--text-dark:     #2a2a2a;
--text-mid:      #555;
--bg:            #FAF7F2;
--bg-alt:        #f3ede5;
--bg-dark:       #352028;
--border:        rgba(90,58,46,0.12);
--nav-height:    80px;
--font-display: 'Cormorant Garamond', Georgia, serif;
--font-body:    'Raleway', Arial, sans-serif;
--transition-fast: 0.2s ease;
--transition-med: 0.3s ease;
--transition-slow: 0.5s ease;
--shadow-sm: 0 4px 12px rgba(0,0,0,0.08);
--shadow-md: 0 8px 24px rgba(0,0,0,0.1);
--shadow-lg: 0 20px 60px rgba(0,0,0,0.15);
}
html { scroll-behavior: smooth; }
body {
font-family: var(--font-body);
background: var(--bg);
color: var(--text-dark);
line-height: 1.7;
padding-top: var(--nav-height);
overflow-x: hidden;
}
a { text-decoration: none; color: inherit; transition: color var(--transition-fast); }
a:hover { color: var(--primary); }
img { max-width: 100%; height: auto; display: block; }
/* ==================== UTILITAIRES ==================== */
.container {
max-width: 1160px;
margin: 0 auto;
padding: 0 40px;
}
.section-label {
display: block;
font-family: var(--font-body);
font-size: 10px;
font-weight: 400;
letter-spacing: 0.3em;
text-transform: uppercase;
color: var(--primary);
margin-bottom: 16px;
}
.section-header {
text-align: center;
margin-bottom: 60px;
}
.section-header h2 {
font-family: var(--font-display);
font-weight: 400;
font-size: clamp(1.8rem, 3.5vw, 2.6rem);
color: var(--accent);
line-height: 1.25;
margin-bottom: 14px;
letter-spacing: 0.01em;
}
.section-header p {
font-family: var(--font-body);
font-size: 0.92rem;
font-weight: 300;
color: var(--text-mid);
letter-spacing: 0.04em;
}
.divider {
width: 50px;
height: 1px;
background: var(--primary);
margin: 0 auto;
}
/* Boutons */
.btn {
display: inline-block;
font-family: var(--font-body);
font-size: 11px;
font-weight: 400;
letter-spacing: 0.2em;
text-transform: uppercase;
color: #fff;
background: var(--primary);
padding: 14px 36px;
border-radius: 30px;
border: none;
cursor: pointer;
transition: background var(--transition-med), transform var(--transition-med), box-shadow var(--transition-med);
box-shadow: 0 8px 24px rgba(201,122,147,0.35);
}
.btn:hover, .btn:focus {
background: var(--primary-dark);
transform: translateY(-3px);
box-shadow: 0 14px 30px rgba(201,122,147,0.45);
outline: 2px solid var(--primary-dark);
outline-offset: 2px;
}
.btn:active {
transform: translateY(0);
}
.btn-outline {
background: transparent;
color: rgba(255,255,255,0.85);
border: 1px solid rgba(255,255,255,0.4);
box-shadow: none;
}
.btn-outline:hover, .btn-outline:focus {
background: rgba(255,255,255,0.1);
color: #fff;
box-shadow: none;
outline: 2px solid rgba(255,255,255,0.6);
outline-offset: 2px;
}
/* Scroll reveal */
.fade {
opacity: 0;
transform: translateY(28px);
transition: opacity 0.8s ease, transform 0.8s ease;
}
.fade.visible { opacity: 1; transform: translateY(0); }
/* Focus visible pour accessibilité */
:focus-visible {
outline: 2px solid var(--primary);
outline-offset: 2px;
}
/* ==================== HERO ==================== */
.hero {
  height: 95vh;
  min-height: 580px;
  max-height: 900px;
  background: #352028; /* Couleur en dur pour tester */
  position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
}
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.15) !important; /* Overlay très léger */
  z-index: 1;
}
.hero-content {
position: relative;
z-index: 2;
max-width: 620px;
animation: fadeInUp 1.2s ease forwards;
}
.hero-eyebrow {
display: inline-block;
font-family: var(--font-body);
font-size: 10px;
font-weight: 400;
letter-spacing: 0.35em;
text-transform: uppercase;
color: rgba(255,255,255,0.65);
border: 1px solid rgba(255,255,255,0.25);
padding: 7px 18px;
border-radius: 20px;
margin-bottom: 24px;
}
.hero h1 {
font-family: var(--font-display);
font-weight: 300;
font-size: clamp(2.6rem, 5.5vw, 4.2rem);
line-height: 1.15;
color: #fff;
margin-bottom: 20px;
text-shadow: 0 4px 20px rgba(0,0,0,0.25);
}
.hero h1 em {
font-style: italic;
color: var(--primary-light);
}
.hero-sub {
font-family: var(--font-body);
font-size: 0.9rem;
font-weight: 300;
letter-spacing: 0.08em;
color: rgba(255,255,255,0.72);
margin-bottom: 36px;
line-height: 1.8;
}
.hero-btns {
display: flex;
gap: 14px;
flex-wrap: wrap;
}
/* ==================== PHILOSOPHIE ==================== */
.philosophie {
padding: 100px 0;
background: var(--bg);
}
.philosophie-grid {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 80px;
align-items: center;
}
.philosophie-text h2 {
font-family: var(--font-display);
font-weight: 400;
font-size: clamp(1.8rem, 3vw, 2.4rem);
color: var(--accent);
margin-bottom: 28px;
line-height: 1.25;
}
.philosophie-text p {
font-family: var(--font-body);
font-size: 0.97rem;
font-weight: 300;
color: var(--text-mid);
line-height: 1.9;
margin-bottom: 18px;
}
.philosophie-signature {
display: flex;
align-items: center;
gap: 16px;
margin-top: 32px;
}
.philosophie-signature::before {
content: '';
width: 40px;
height: 1px;
background: var(--primary);
}
.philosophie-signature span {
font-family: var(--font-display);
font-style: italic;
font-size: 1.1rem;
color: var(--accent);
font-weight: 400;
}
.philosophie-image img {
width: 100%;
border-radius: 14px;
aspect-ratio: 4/5;
object-fit: cover;
box-shadow: var(--shadow-lg);
transition: transform var(--transition-slow);
}
.philosophie-image img:hover { transform: scale(1.02); }
/* ==================== FORMATION ==================== */
.formation {
padding: 90px 0;
background: var(--bg-alt);
}
.formation-grid {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 80px;
align-items: center;
}
.formation-text h2 {
font-family: var(--font-display);
font-weight: 400;
font-size: clamp(1.8rem, 3vw, 2.4rem);
color: var(--accent);
margin-bottom: 24px;
line-height: 1.25;
}
.formation-text p {
font-family: var(--font-body);
font-size: 0.97rem;
font-weight: 300;
color: var(--text-mid);
line-height: 1.9;
margin-bottom: 16px;
}
.formation-highlights {
margin-top: 32px;
display: flex;
flex-direction: column;
gap: 12px;
}
.highlight-item {
display: flex;
align-items: center;
gap: 12px;
font-family: var(--font-body);
font-size: 0.9rem;
font-weight: 400;
color: var(--text-dark);
}
.highlight-item i {
color: var(--primary);
font-size: 14px;
flex-shrink: 0;
}
.formation-image img {
width: 100%;
border-radius: 14px;
aspect-ratio: 4/3;
object-fit: cover;
box-shadow: var(--shadow-lg);
transition: transform var(--transition-slow);
}
.formation-image img:hover { transform: scale(1.02); }
/* ==================== PROGRAMME ==================== */
.programme {
padding: 90px 0;
background: var(--bg);
}
/* Accordéon modules */
.modules-list {
max-width: 820px;
margin: 0 auto 60px;
display: flex;
flex-direction: column;
gap: 0;
border: 1px solid var(--border);
border-radius: 14px;
overflow: hidden;
}
.module-item {
border-bottom: 1px solid var(--border);
}
.module-item:last-child { border-bottom: none; }
.module-header {
display: flex;
align-items: center;
gap: 20px;
padding: 22px 28px;
cursor: pointer;
background: #fff;
transition: background var(--transition-fast);
user-select: none;
}
.module-header:hover { background: rgba(201,122,147,0.04); }
.module-header:focus {
outline: 2px solid var(--primary);
outline-offset: -2px;
}
.module-num {
font-family: var(--font-display);
font-size: 1.8rem;
font-weight: 300;
color: var(--primary-light);
min-width: 40px;
line-height: 1;
}
.module-title-wrap { flex: 1; }
.module-title-wrap h3 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.2rem;
color: var(--accent);
margin-bottom: 2px;
}
.module-duree {
font-family: var(--font-body);
font-size: 10px;
font-weight: 300;
letter-spacing: 0.15em;
text-transform: uppercase;
color: rgba(85,85,85,0.5);
}
.module-toggle {
background: none;
border: none;
cursor: pointer;
color: var(--text-mid);
font-size: 12px;
transition: transform var(--transition-med), color var(--transition-fast);
padding: 4px;
}
.module-toggle:hover { color: var(--primary); }
.module-item.open .module-toggle { transform: rotate(180deg); color: var(--primary); }
.module-body {
display: none;
padding: 0 28px 22px 88px;
background: #fff;
}
.module-item.open .module-body { display: block; }
.module-body ul {
list-style: none;
display: flex;
flex-direction: column;
gap: 8px;
}
.module-body ul li {
font-family: var(--font-body);
font-size: 0.9rem;
font-weight: 300;
color: var(--text-mid);
display: flex;
align-items: flex-start;
gap: 10px;
line-height: 1.6;
}
.module-body ul li::before {
content: '–';
color: var(--primary);
flex-shrink: 0;
margin-top: 1px;
}
/* Résumé programme */
.programme-resume {
display: grid;
grid-template-columns: repeat(4, 1fr);
gap: 24px;
max-width: 820px;
margin: 0 auto;
}
.resume-item {
background: #fff;
border: 1px solid var(--border);
border-radius: 12px;
padding: 24px 20px;
text-align: center;
transition: box-shadow var(--transition-med), transform var(--transition-med);
}
.resume-item:hover { 
box-shadow: var(--shadow-md);
transform: translateY(-3px);
}
.resume-item i {
color: var(--primary);
font-size: 1.3rem;
margin-bottom: 12px;
display: block;
}
.resume-item h4 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.05rem;
color: var(--accent);
margin-bottom: 4px;
}
.resume-item p {
font-family: var(--font-body);
font-size: 11px;
font-weight: 300;
color: rgba(85,85,85,0.6);
letter-spacing: 0.05em;
}
/* ==================== FAQ ==================== */
.faq {
padding: 90px 0;
background: var(--bg-alt);
}
.faq-list {
max-width: 760px;
margin: 0 auto;
display: flex;
flex-direction: column;
gap: 0;
border: 1px solid var(--border);
border-radius: 14px;
overflow: hidden;
}
.faq-item {
border-bottom: 1px solid var(--border);
background: #fff;
}
.faq-item:last-child { border-bottom: none; }
.faq-question {
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
gap: 16px;
padding: 20px 28px;
background: none;
border: none;
cursor: pointer;
text-align: left;
transition: background var(--transition-fast);
font-family: var(--font-body);
font-size: 0.92rem;
font-weight: 400;
color: var(--accent);
}
.faq-question:hover { background: rgba(201,122,147,0.04); }
.faq-question:focus {
outline: 2px solid var(--primary);
outline-offset: -2px;
}
.faq-icon {
color: var(--primary);
font-size: 12px;
flex-shrink: 0;
transition: transform var(--transition-med);
}
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-answer {
display: none;
padding: 0 28px 20px 28px;
}
.faq-item.open .faq-answer { display: block; }
.faq-answer p {
font-family: var(--font-body);
font-size: 0.9rem;
font-weight: 300;
color: var(--text-mid);
line-height: 1.85;
margin-bottom: 10px;
}
.faq-answer ul {
list-style: none;
display: flex;
flex-direction: column;
gap: 6px;
margin-top: 8px;
}
.faq-answer ul li {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: var(--text-mid);
display: flex;
align-items: flex-start;
gap: 10px;
line-height: 1.6;
}
.faq-answer ul li::before {
content: '–';
color: var(--primary);
flex-shrink: 0;
}
/* ==================== COMPÉTENCES ==================== */
.competences {
padding: 90px 0;
background: var(--bg);
}
.competences-grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 24px;
}
.competence-card {
background: #fff;
border: 1px solid var(--border);
border-radius: 14px;
padding: 36px 28px;
position: relative;
overflow: hidden;
transition: transform var(--transition-med), box-shadow var(--transition-med);
}
.competence-card::before {
content: '';
position: absolute;
top: 0; left: 28px; right: 28px;
height: 2px;
background: linear-gradient(to right, var(--primary), transparent);
}
.competence-card:hover {
transform: translateY(-5px);
box-shadow: var(--shadow-md);
}
.competence-card:focus-within {
box-shadow: var(--shadow-md);
}
.competence-card i {
color: var(--primary);
font-size: 1.3rem;
margin-bottom: 18px;
display: block;
}
.competence-card h3 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.2rem;
color: var(--accent);
margin-bottom: 10px;
}
.competence-card p {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: var(--text-mid);
line-height: 1.8;
}
/* ==================== ÉLÈVES / SLIDER ==================== */
.eleves {
padding: 90px 0;
background: var(--bg-dark);
position: relative;
overflow: hidden;
}
.eleves::before {
content: '';
position: absolute;
inset: 0;
background: radial-gradient(ellipse at 30% 50%, rgba(201,122,147,0.08) 0%, transparent 65%);
pointer-events: none;
}
.eleves .section-header h2 { color: #fff; }
.eleves .section-header p { color: rgba(255,255,255,0.45); }
.eleves .section-label { color: rgba(201,122,147,0.8); }

.slider-wrapper {
position: relative;
overflow: hidden;
width: 100%;
padding: 20px 0;
}

.slider-track {
display: flex;
gap: 24px;
transition: transform 0.5s ease;
width: max-content;
}

.eleve-card {
width: 320px;
background: rgba(255,255,255,0.05);
border: 1px solid rgba(255,255,255,0.08);
border-radius: 14px;
overflow: hidden;
flex-shrink: 0;
transition: transform 0.3s, box-shadow 0.3s;
}

.eleve-card:hover { 
transform: translateY(-5px);
box-shadow: 0 12px 35px rgba(0,0,0,0.2);
}

.eleve-img {
width: 100%;
height: 380px;
overflow: hidden;
position: relative;

}

.eleve-img img {
width: 100%;
height: 100%;
object-fit: contain; /* Affiche toute l'image sans couper */
object-position: center top;
display: block;
transition: transform 0.4s ease;
}

.eleve-card:hover .eleve-img img { 
transform: scale(1.03); 
}

.eleve-img-overlay {
position: absolute;
bottom: 0;
left: 0;
right: 0;
background: linear-gradient(to top, rgba(46,27,1,0.9), transparent);
padding: 20px 16px 16px;
display: flex;
justify-content: space-between;
align-items: center;
}

.eleve-img-overlay i {
color: var(--primary-light);
font-size: 1.3rem;
}

.eleve-info {
padding: 20px 22px 22px;
}

.eleve-info h3 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.2rem;
color: rgba(255,255,255,0.95);
margin-bottom: 10px;
}

.eleve-info p {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: rgba(255,255,255,0.55);
line-height: 1.7;
font-style: italic;
}

.slider-btns {
display: flex;
justify-content: center;
gap: 14px;
margin-top: 40px;
}

.slider-btn {
width: 46px; 
height: 46px;
border-radius: 50%;
background: rgba(255,255,255,0.08);
border: 1px solid rgba(255,255,255,0.15);
color: rgba(255,255,255,0.75);
cursor: pointer;
font-size: 16px;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s;
}

.slider-btn:hover {
background: rgba(201,122,147,0.3);
color: #fff;
border-color: var(--primary);
transform: scale(1.1);
}

/* Dots de navigation */
.slider-dots {
display: flex;
justify-content: center;
gap: 10px;
margin-top: 24px;
}

.slider-dot {
width: 10px;
height: 10px;
border-radius: 50%;
background: rgba(255,255,255,0.2);
border: none;
cursor: pointer;
transition: all 0.3s;
}

.slider-dot.active {
background: var(--primary);
width: 30px;
border-radius: 5px;
}

.slider-dot:hover {
background: rgba(201,122,147,0.6);
}

/* Responsive */
@media (max-width: 1024px) {
.eleve-card {
width: 280px;
}
.eleve-img {
height: 340px;
}
}

@media (max-width: 768px) {
.eleve-card {
width: 260px;
}
.eleve-img {
height: 320px;
}
}

@media (max-width: 480px) {
.eleve-card {
width: 240px;
}
.eleve-img {
height: 300px;
}
.slider-btn {
width: 42px;
height: 42px;
}
}

/* Responsive élèves */
@media (max-width: 1024px) {
.eleve-card {
width: calc(50% - 10px);
}
}
@media (max-width: 768px) {
.eleve-card {
width: calc(100% - 0px);
}
.eleve-img {
height: 320px;
}
}
@media (max-width: 480px) {
.eleve-img {
height: 280px;
}
}
/* ==================== TARIFS ==================== */
.tarifs {
padding: 90px 0;
background: var(--bg);
}
.tarif-card {
max-width: 500px;
margin: 0 auto;
background: #fff;
border: 1px solid var(--border);
border-radius: 20px;
overflow: hidden;
box-shadow: var(--shadow-lg);
position: relative;
}
.tarif-card::before {
content: '';
position: absolute;
top: 0; left: 0; right: 0;
height: 3px;
background: linear-gradient(to right, var(--primary), var(--primary-light));
}
.tarif-top {
padding: 40px 44px 32px;
text-align: center;
border-bottom: 1px solid var(--border);
}
.tarif-top h3 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.6rem;
color: var(--accent);
margin-bottom: 20px;
}
.tarif-prix {
font-family: var(--font-display);
font-size: 3.5rem;
font-weight: 400;
color: var(--primary);
line-height: 1;
}
.tarif-prix span {
font-size: 1.2rem;
vertical-align: super;
font-weight: 300;
}
.tarif-periode {
font-family: var(--font-body);
font-size: 10px;
font-weight: 300;
letter-spacing: 0.2em;
text-transform: uppercase;
color: rgba(85,85,85,0.5);
margin-top: 6px;
}
.tarif-body {
padding: 32px 44px 40px;
}
.tarif-features {
list-style: none;
display: flex;
flex-direction: column;
gap: 12px;
margin-bottom: 32px;
}
.tarif-features li {
font-family: var(--font-body);
font-size: 0.92rem;
font-weight: 300;
color: var(--text-mid);
display: flex;
align-items: center;
gap: 12px;
}
.tarif-features li i {
color: var(--primary);
font-size: 12px;
flex-shrink: 0;
}
.tarif-body .btn {
width: 100%;
text-align: center;
display: block;
}
/* ==================== CONTACT ==================== */
.contact {
padding: 90px 0;
background: var(--bg-alt);
}
.contact-grid {
display: grid;
grid-template-columns: repeat(2, 1fr);
gap: 24px;
max-width: 640px;
margin: 0 auto;
}
.contact-card {
background: #fff;
border: 1px solid var(--border);
border-radius: 14px;
padding: 28px 24px;
display: flex;
align-items: flex-start;
gap: 16px;
transition: box-shadow var(--transition-med), transform var(--transition-med);
}
.contact-card:hover { 
box-shadow: var(--shadow-md);
transform: translateY(-3px);
}
.contact-card i {
color: var(--primary);
font-size: 1.1rem;
margin-top: 2px;
flex-shrink: 0;
}
.contact-card h4 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1rem;
color: var(--accent);
margin-bottom: 4px;
}
.contact-card p {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: var(--text-mid);
line-height: 1.6;
}
/* ==================== CTA FINAL ==================== */
.cta {
padding: 100px 0;
background: var(--bg-dark);
text-align: center;
position: relative;
overflow: hidden;
}
.cta::before {
content: '';
position: absolute;
inset: 0;
background: radial-gradient(ellipse at center, rgba(201,122,147,0.1) 0%, transparent 65%);
pointer-events: none;
}
.cta-inner {
position: relative;
z-index: 1;
}
.cta-inner h2 {
font-family: var(--font-display);
font-weight: 300;
font-size: clamp(2rem, 4vw, 3rem);
color: #fff;
margin-bottom: 14px;
letter-spacing: 0.01em;
}
.cta-inner h2 em {
font-style: italic;
color: var(--primary-light);
}
.cta-inner p {
font-family: var(--font-body);
font-size: 11px;
font-weight: 300;
letter-spacing: 0.2em;
text-transform: uppercase;
color: rgba(255,255,255,0.45);
margin-bottom: 36px;
}
/* ==================== MODAL ==================== */
.modal {
display: none;
position: fixed;
inset: 0;
z-index: 9999;
align-items: center;
justify-content: center;
padding: 20px;
}
.modal.active { display: flex; }
.modal-overlay {
position: absolute;
inset: 0;
background: rgba(0,0,0,0.75);
backdrop-filter: blur(4px);
}
.modal-box {
position: relative;
z-index: 1;
background: var(--bg);
border-radius: 18px;
padding: 48px 44px;
width: 100%;
max-width: 500px;
max-height: 90vh;
overflow-y: auto;
box-shadow: var(--shadow-lg);
}
.modal-close {
position: absolute;
top: 18px; right: 22px;
background: none;
border: none;
font-size: 1.6rem;
color: var(--text-mid);
cursor: pointer;
line-height: 1;
transition: color var(--transition-fast);
padding: 4px;
}
.modal-close:hover { color: var(--accent); }
.modal-close:focus {
outline: 2px solid var(--primary);
outline-offset: 2px;
}
.modal-box h3 {
font-family: var(--font-display);
font-weight: 400;
font-size: 1.8rem;
color: var(--accent);
margin-bottom: 6px;
}
.modal-box > p {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: var(--text-mid);
margin-bottom: 28px;
}
/* Formulaire */
.form-group {
margin-bottom: 18px;
}
.form-group label {
display: block;
font-family: var(--font-body);
font-size: 10px;
font-weight: 400;
letter-spacing: 0.15em;
text-transform: uppercase;
color: var(--accent);
margin-bottom: 7px;
}
.form-group input,
.form-group select {
width: 100%;
padding: 12px 16px;
border: 1px solid var(--border);
border-radius: 8px;
font-family: var(--font-body);
font-size: 0.9rem;
font-weight: 300;
color: var(--text-dark);
background: #fff;
transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
outline: none;
}
.form-group input:focus,
.form-group select:focus { 
border-color: var(--primary);
box-shadow: 0 0 0 3px rgba(201,122,147,0.15);
}
.form-check {
display: flex;
align-items: flex-start;
gap: 10px;
margin-bottom: 24px;
}
.form-check input { 
width: auto; 
margin-top: 2px;
cursor: pointer;
}
.form-check input:focus {
outline: 2px solid var(--primary);
outline-offset: 2px;
}
.form-check label {
font-family: var(--font-body);
font-size: 0.85rem;
font-weight: 300;
color: var(--text-mid);
cursor: pointer;
}
.form-check label a { color: var(--primary); }
.form-check label a:hover { text-decoration: underline; }
.modal-secure {
text-align: center;
margin-top: 16px;
font-family: var(--font-body);
font-size: 11px;
font-weight: 300;
color: rgba(85,85,85,0.5);
letter-spacing: 0.04em;
}
.modal-secure i { color: var(--primary); margin-right: 5px; }
/* ==================== FOOTER ==================== */
footer {
background: var(--bg-dark);
padding: 60px 0 32px;
}
.footer-grid {
display: grid;
grid-template-columns: 2fr 1fr; /* 2 colonnes au lieu de 3 */
gap: 50px;
margin-bottom: 40px;
}

.footer-brand {
font-family: var(--font-display);
font-style: italic;
font-size: 1.4rem;
color: rgba(255,255,255,0.85);
margin-bottom: 14px;
}
.footer-desc {
font-family: var(--font-body);
font-size: 0.85rem;
font-weight: 300;
color: rgba(255,255,255,0.35);
line-height: 1.7;
}
.footer-col h4 {
font-family: var(--font-body);
font-size: 10px;
font-weight: 400;
letter-spacing: 0.25em;
text-transform: uppercase;
color: rgba(255,255,255,0.4);
margin-bottom: 16px;
}
.footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 8px; }
.footer-col ul li a {
font-family: var(--font-body);
font-size: 0.88rem;
font-weight: 300;
color: rgba(255,255,255,0.5);
transition: color var(--transition-fast);
}
.footer-col ul li a:hover { color: rgba(255,255,255,0.85); }
.footer-contact li {
font-family: var(--font-body);
font-size: 0.85rem;
font-weight: 300;
color: rgba(255,255,255,0.45);
display: flex;
align-items: center;
gap: 10px;
margin-bottom: 8px;
}
.footer-contact li i { color: var(--primary); font-size: 12px; }
.footer-bottom {
border-top: 1px solid rgba(255,255,255,0.08);
padding-top: 24px;
text-align: center;
font-family: var(--font-body);
font-size: 0.78rem;
font-weight: 300;
color: rgba(255,255,255,0.25);
letter-spacing: 0.05em;
}
/* ==================== WHATSAPP FLOAT ==================== */

.whatsapp-float{
    position: fixed;
    bottom: 20px;
    right: 20px;

    display: flex;
    align-items: center;
    gap: 10px;

    background: #FAF7F2;
    color: #156934;

    padding: 7px 15px;
    border-radius: 40px;

    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    font-weight: 400;

    box-shadow: 0 10px 28px rgba(0,0,0,0.18);

    z-index: 999;

    animation: whatsapp-breath 3s ease-in-out infinite;

    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.whatsapp-float img{
    width: 40px;
    height: 40px;
}

.whatsapp-text{
    white-space: nowrap;
}

.whatsapp-float:hover{
    transform: translateY(-3px);
    box-shadow: 0 14px 34px rgba(0,0,0,0.25);
}

@media (max-width:768px){

.whatsapp-text{
    display:none;
}

.whatsapp-float{
    width:58px;
    height:58px;
    padding:0;
    justify-content:center;
    border-radius:50%;
}

.whatsapp-float img{
    width:40px;
}

}

/* ==================== ANIMATIONS ==================== */

/* Animation respiration WhatsApp */
@keyframes whatsapp-breath {

0% {
    transform: scale(1);
}

50% {
    transform: scale(1.06);
}

100% {
    transform: scale(1);
}

}



@keyframes fadeInUp {
from { opacity: 0; transform: translateY(30px); }
to   { opacity: 1; transform: translateY(0); }
}
/* ==================== RESPONSIVE ==================== */
@media (max-width: 1024px) {
.container { padding: 0 30px; }
.competences-grid { grid-template-columns: repeat(2, 1fr); }
.footer-grid { grid-template-columns: 1fr 1fr; gap: 36px; }
.footer-grid > div:first-child { grid-column: 1 / -1; }
}
@media (max-width: 768px) {
.container { padding: 0 20px; }
.philosophie-grid,
.formation-grid { grid-template-columns: 1fr; gap: 40px; }
.philosophie { padding: 70px 0; }
.formation   { padding: 70px 0; }
.programme   { padding: 70px 0; }
.faq         { padding: 70px 0; }
.competences { padding: 70px 0; }
.eleves      { padding: 70px 0; }
.tarifs      { padding: 70px 0; }
.contact     { padding: 70px 0; }
.cta         { padding: 70px 0; }
.competences-grid { grid-template-columns: 1fr; gap: 16px; }
.programme-resume { grid-template-columns: repeat(2, 1fr); }
.eleve-card { width: calc(100% - 20px); }
.contact-grid { grid-template-columns: 1fr; }
.footer-grid { grid-template-columns: 1fr; gap: 28px; }
.modal-box { padding: 36px 28px; }
.hero-btns { flex-direction: column; }
.module-body { padding-left: 28px; }
.tarif-prix { font-size: 2.8rem; }
.hero { min-height: 500px; height: auto; padding: 80px 0; }
}
@media (max-width: 480px) {
.programme-resume { grid-template-columns: 1fr; }
.hero h1 { font-size: 2.2rem; }
.tarif-top, .tarif-body { padding-left: 28px; padding-right: 28px; }
.whatsapp-text { display: none; }
.whatsapp-float {
width: 56px;
height: 56px;
padding: 0;
justify-content: center;
border-radius: 50%;
}
.whatsapp-float img { width: 28px; }
}
/* ==================== PRINT ==================== */
@media print {
.hero, .eleves, .cta, .whatsapp-float, .modal { display: none !important; }
body { background: #fff; color: #000; }
.btn { background: #000; color: #fff; }
}
/* ==================== REDUCED MOTION ==================== */
@media (prefers-reduced-motion: reduce) {
*, *::before, *::after {
animation-duration: 0.01ms !important;
animation-iteration-count: 1 !important;
transition-duration: 0.01ms !important;
scroll-behavior: auto !important;
}
}
</style>
</head>
<body>
<!-- ========== NAVIGATION ========== -->
<?php include "nav_menu.php"; ?>

<!-- ========== HERO ========== -->
<header class="hero" id="accueil" role="banner">
<div class="container">
<div class="hero-content">
<span class="hero-eyebrow">Formation en ligne certifiante</span>
<h1>L'art du <em>Head Spa</em><br>japonais</h1>
<p class="hero-sub">
Formation 100% en ligne · Accès immédiat après achat<br>
Maîtrisez un protocole Head Spa professionnel, à votre rythme
</p>
<div class="hero-btns">
<a href="#tarifs" class="btn">Accéder à la formation</a>
<a href="#formation" class="btn btn-outline">Découvrir le programme</a>
</div>
</div>
</div>
</header>

<!-- ========== PHILOSOPHIE ========== -->
<section class="philosophie fade" id="philosophie">
<div class="container">
<div class="philosophie-grid">
<div class="philosophie-text">
<span class="section-label">Ma philosophie</span>
<h2>Le silence comme thérapie</h2>
<p>Chez Head Spa Lyon By F., je transmets bien plus qu'une technique : je partage un véritable art de vivre. Inspirée des rituels japonais ancestraux, mon approche fusionne précision manuelle, écoute subtile et présence consciente.</p>
<p>Chaque geste est intentionnel. Chaque respiration, synchronisée. Se former ici, c'est apprendre à créer des espaces de paix dans un monde agité.</p>
<div class="philosophie-signature">
<span>Fadoua, Fondatrice</span>
</div>
</div>
<div class="philosophie-image">
<img src="images/23ergh1ert4.jpeg" alt="Rituel Head Spa - Massage du cuir chevelu" loading="lazy">
</div>
</div>
</div>
</section>

<!-- ========== FORMATION ========== -->
<section class="formation fade" id="formation">
<div class="container">
<div class="formation-grid">
<div class="formation-text">
<span class="section-label">Formation e-learning</span>
<h2>Une formation 100% en ligne,<br>accessible à tous</h2>
<p>Cette formation a été pensée pour permettre aux professionnels de structurer une prestation Head Spa professionnelle, adaptée aux réalités de la coiffure, de l'esthétique, du bien-être ou d'un projet de reconversion.</p>
<p>Accessible après achat, le programme accompagne pas à pas la mise en place d'un protocole clair, depuis les bases jusqu'à une offre Head Spa exploitable en établissement.</p>
<div class="formation-highlights">
<div class="highlight-item"><i class="fa-solid fa-circle-check"></i><span>Accès immédiat après achat</span></div>
<div class="highlight-item"><i class="fa-solid fa-circle-check"></i><span>Progression à votre rythme</span></div>
<div class="highlight-item"><i class="fa-solid fa-circle-check"></i><span>Accessible sur tous supports</span></div>
<div class="highlight-item"><i class="fa-solid fa-circle-check"></i><span>Compatible avec votre activité</span></div>
</div>
</div>
<div class="formation-image">
<img src="images/24ezg4erg.jpg" alt="Formation Head Spa en ligne sur ordinateur" loading="lazy">
</div>
</div>
</div>
</section>

<!-- ========== PROGRAMME ========== -->
<section class="programme fade" id="programme">
<div class="container">
<div class="section-header">
<span class="section-label">Programme complet</span>
<h2>Les 5 modules de formation</h2>
<p>Une progression structurée pour maîtriser le Head Spa</p>
</div>
<div class="modules-list" role="tablist">
<div class="module-item">
<div class="module-header" role="tab" tabindex="0" aria-expanded="false">
<span class="module-num">01</span>
<div class="module-title-wrap">
<h3>Initiation au Shiatsu Head Spa</h3>
<span class="module-duree">Durée : 2h</span>
</div>
<button class="module-toggle" aria-label="Développer le module"><i class="fa-solid fa-chevron-down"></i></button>
</div>
<div class="module-body" role="tabpanel">
<ul>
<li>Fondements du Shiatsu appliqués au Head Spa</li>
<li>Identification des points stratégiques de relâchement du cuir chevelu</li>
<li>Maîtrise de la pression et adaptation au confort du client</li>
<li>Mise en place d'une première expérience sensorielle professionnelle</li>
<li>Développer l'assurance et la précision des gestes dès le départ</li>
</ul>
</div>
</div>
<div class="module-item">
<div class="module-header" role="tab" tabindex="0" aria-expanded="false">
<span class="module-num">02</span>
<div class="module-title-wrap">
<h3>Cadre professionnel</h3>
<span class="module-duree">Durée : 1h30</span>
</div>
<button class="module-toggle" aria-label="Développer le module"><i class="fa-solid fa-chevron-down"></i></button>
</div>
<div class="module-body" role="tabpanel">
<ul>
<li>Aménagement et organisation de l'espace cabine</li>
<li>Sélection et préparation du matériel indispensable</li>
<li>Protocoles d'hygiène et normes de sécurité professionnelle</li>
<li>Posture et ergonomie du praticien</li>
</ul>
</div>
</div>
<div class="module-item">
<div class="module-header" role="tab" tabindex="0" aria-expanded="false">
<span class="module-num">03</span>
<div class="module-title-wrap">
<h3>Origines & Concept du Head Spa</h3>
<span class="module-duree">Durée : 1h</span>
</div>
<button class="module-toggle" aria-label="Développer le module"><i class="fa-solid fa-chevron-down"></i></button>
</div>
<div class="module-body" role="tabpanel">
<ul>
<li>Origines et inspirations japonaises du Head Spa</li>
<li>Distinction entre shampooing traditionnel et soin Head Spa</li>
<li>Importance du cuir chevelu dans la santé et la beauté capillaire</li>
<li>Évolution du marché du bien-être et du scalp-care</li>
</ul>
</div>
</div>
<div class="module-item">
<div class="module-header" role="tab" tabindex="0" aria-expanded="false">
<span class="module-num">04</span>
<div class="module-title-wrap">
<h3>Philosophie & Bienfaits</h3>
<span class="module-duree">Durée : 1h30</span>
</div>
<button class="module-toggle" aria-label="Développer le module"><i class="fa-solid fa-chevron-down"></i></button>
</div>
<div class="module-body" role="tabpanel">
<ul>
<li>Relaxation et régulation du système nerveux</li>
<li>Impact sur le stress et les tensions crâniennes</li>
<li>Stimulation de la microcirculation sanguine</li>
<li>Corrélation entre cuir chevelu sain et qualité du cheveu</li>
<li>Bénéfices émotionnels et sensoriels</li>
</ul>
</div>
</div>
<div class="module-item">
<div class="module-header" role="tab" tabindex="0" aria-expanded="false">
<span class="module-num">05</span>
<div class="module-title-wrap">
<h3>Structure d'un soin Head Spa</h3>
<span class="module-duree">Durée : 2h</span>
</div>
<button class="module-toggle" aria-label="Développer le module"><i class="fa-solid fa-chevron-down"></i></button>
</div>
<div class="module-body" role="tabpanel">
<ul>
<li>Phase de diagnostic personnalisé</li>
<li>Étape de purification capillaire</li>
<li>Techniques manuelles spécifiques</li>
<li>Application de soins adaptés aux besoins identifiés</li>
<li>Finalisation du soin et recommandations personnalisées</li>
</ul>
</div>
</div>
</div>
<!-- Résumé -->
<div class="programme-resume">
<div class="resume-item">
<i class="fa-solid fa-video"></i>
<h4>30+ vidéos HD</h4>
<p>Accès illimité à vie</p>
</div>
<div class="resume-item">
<i class="fa-solid fa-book"></i>
<h4>150+ pages PDF</h4>
<p>Téléchargeables</p>
</div>
<div class="resume-item">
<i class="fa-regular fa-clock"></i>
<h4>8h de contenu</h4>
<p>À votre rythme</p>
</div>
<div class="resume-item">
<i class="fa-solid fa-certificate"></i>
<h4>Attestation</h4>
<p>À l'issue de la formation</p>
</div>
</div>
</div>
</section>

<!-- ========== FAQ ========== -->
<section class="faq fade" id="faq">
<div class="container">
<div class="section-header">
<span class="section-label">Questions fréquentes</span>
<h2>Tout ce que vous devez savoir</h2>
</div>
<div class="faq-list">
<div class="faq-item">
<button class="faq-question" aria-expanded="false">
<span>À qui s'adresse cette formation ?</span>
<i class="fa-solid fa-plus faq-icon"></i>
</button>
<div class="faq-answer">
<p>Cette formation s'adapte à des profils variés :</p>
<ul>
<li>Professionnels de la coiffure souhaitant enrichir leur carte de services</li>
<li>Instituts de beauté et esthéticiennes désirant intégrer un soin différenciant</li>
<li>Acteurs du bien-être cherchant à proposer une expérience complémentaire</li>
<li>Personnes en reconversion souhaitant acquérir une méthode claire</li>
</ul>
</div>
</div>
<div class="faq-item">
<button class="faq-question" aria-expanded="false">
<span>Comment se déroule la formation en ligne ?</span>
<i class="fa-solid fa-plus faq-icon"></i>
</button>
<div class="faq-answer">
<p>La formation est 100% en ligne :</p>
<ul>
<li>Accès immédiat à la plateforme après validation de l'achat</li>
<li>Apprentissage depuis ordinateur, tablette ou smartphone</li>
<li>Rythme libre et adaptable selon vos disponibilités</li>
<li>Contenus conçus pour une compréhension progressive</li>
</ul>
</div>
</div>
<div class="faq-item">
<button class="faq-question" aria-expanded="false">
<span>Est-ce adapté aux débutants ?</span>
<i class="fa-solid fa-plus faq-icon"></i>
</button>
<div class="faq-answer">
<p>Oui, absolument. La formation repose sur une progression pédagogique accessible permettant de démarrer sans prérequis et d'évoluer progressivement vers une pratique professionnelle structurée.</p>
</div>
</div>
<div class="faq-item">
<button class="faq-question" aria-expanded="false">
<span>Faut-il du matériel spécifique ?</span>
<i class="fa-solid fa-plus faq-icon"></i>
</button>
<div class="faq-answer">
<p>Non. La formation se concentre sur la compréhension de la méthode, sans dépendre d'un équipement imposé. Vous pourrez adapter les techniques à votre contexte et à votre équipement actuel.</p>
</div>
</div>
</div>
</div>
</section>

<!-- ========== COMPÉTENCES ========== -->
<section class="competences fade" id="competences">
<div class="container">
<div class="section-header">
<span class="section-label">Maîtrise opérationnelle</span>
<h2>Ce que vous saurez faire<br>après la formation</h2>
<p>Une progression claire vers l'autonomie professionnelle</p>
</div>
<div class="competences-grid">
<div class="competence-card">
<i class="fa-solid fa-spa"></i>
<h3>Protocole structuré</h3>
<p>Mettre en place un protocole Head Spa complet avec une progression logique, de l'accueil à la fin de séance.</p>
</div>
<div class="competence-card">
<i class="fa-solid fa-store"></i>
<h3>Intégration en cabine</h3>
<p>Structurer une prestation cohérente adaptée à votre positionnement sans perturber votre organisation.</p>
</div>
<div class="competence-card">
<i class="fa-solid fa-hands-holding"></i>
<h3>Adaptation client</h3>
<p>Personnaliser la prestation selon les profils clients tout en conservant une logique professionnelle.</p>
</div>
<div class="competence-card">
<i class="fa-solid fa-chart-line"></i>
<h3>Valorisation de la prestation</h3>
<p>Présenter clairement votre Head Spa et en expliquer les bienfaits avec assurance.</p>
</div>
<div class="competence-card">
<i class="fa-solid fa-rotate"></i>
<h3>Qualité constante</h3>
<p>Garantir une exécution régulière et une expérience stable pour tous vos clients.</p>
</div>
<div class="competence-card">
<i class="fa-solid fa-gears"></i>
<h3>Maîtrise technique</h3>
<p>Réaliser les gestes avec précision, adapter la pression et enchaîner les techniques de manière fluide.</p>
</div>
</div>
</div>
</section>

<!-- ========== ÉLÈVES ========== -->
<section class="eleves fade" id="temoignages" aria-label="Témoignages d'élèves">
<div class="container">
<div class="section-header">
<span class="section-label">Mes élèves</span>
<h2>Elles ont été certifiées<br>Head Spa</h2>
<p>Découvrez les professionnelles formées à ma méthode</p>
</div>
<div class="slider-wrapper">
<div class="slider-track" id="sliderTrack" role="list">
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/a9f83j4k2l.png" alt="Dilek - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Dilek</h3><p>« Cette formation a transformé ma pratique. Mes clientes adorent le Head Spa ! »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/d8k2p0s9x3.png" alt="Léane - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Léane</h3><p>« Un vrai plus pour mon institut. Positionnement premium immédiat ! »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/z7h2f4l1a6.png" alt="Michelle - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Michelle</h3><p>« Méthode claire et professionnelle. J'ai intégré le Head Spa en 2 semaines ! »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/q3m8v1k7t2.png" alt="Françoise - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Françoise</h3><p>« Mes clients reviennent spécialement pour le Head Spa. Une vraie différenciation ! »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/x6p2d9f4s1.png" alt="Justine - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Justine</h3><p>« Grâce à cette formation, j'ai créé un service à forte valeur ajoutée. »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/n4h7z8c2w5.png" alt="Rose-Marie - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Rose-Marie</h3><p>« Le Head Spa s'intègre naturellement dans ma pratique. »</p></div>
</div>
<div class="eleve-card" role="listitem">
<div class="eleve-img"><img src="images/t8f1v6n3k0.png" alt="Angélique - Élève certifiée Head Spa" loading="lazy"><div class="eleve-img-overlay"><i class="fa-solid fa-certificate"></i></div></div>
<div class="eleve-info"><h3>Angélique</h3><p>« Les explications sont simples et concrètes. J'ai appliqué le protocole dès la semaine suivante. »</p></div>
</div>
</div>
<div class="slider-btns">
<button class="slider-btn" id="btnPrev" aria-label="Témoignage précédent"><i class="fa-solid fa-chevron-left"></i></button>
<button class="slider-btn" id="btnNext" aria-label="Témoignage suivant"><i class="fa-solid fa-chevron-right"></i></button>
</div>
</div>
</div>
</section>

<!-- ========== TARIFS ========== -->
<section class="tarifs fade" id="tarifs">
<div class="container">
<div class="section-header">
<span class="section-label">Investissement</span>
<h2>Tarifs & Inscription</h2>
<p>Formation 100% en ligne — Accès immédiat après paiement</p>
</div>
<div class="tarif-card">
<div class="tarif-top">
<h3>Formation Complète</h3>
<div class="tarif-prix"><span>€</span>297</div>
<div class="tarif-periode">Accès à vie</div>
</div>
<div class="tarif-body">
<ul class="tarif-features">
<li><i class="fa-solid fa-circle-check"></i> 5 modules complets</li>
<li><i class="fa-solid fa-circle-check"></i> 30+ vidéos HD illimitées</li>
<li><i class="fa-solid fa-circle-check"></i> 150+ pages PDF téléchargeables</li>
<li><i class="fa-solid fa-circle-check"></i> Quiz d'évaluation</li>
<li><i class="fa-solid fa-circle-check"></i> Attestation de formation</li>
<li><i class="fa-solid fa-circle-check"></i> Accès à la communauté</li>
</ul>
<button class="btn js-open-modal">Accéder à la formation</button>
</div>
</div>
</div>
</section>

<!-- ========== CONTACT ========== -->
<section class="contact fade" id="contact">
<div class="container">
<div class="section-header">
<span class="section-label">Me contacter</span>
<h2>Une question ?</h2>
<p>Je suis disponible pour répondre à toutes vos questions</p>
</div>
<div class="contact-grid">
<div class="contact-card">
<i class="fa-solid fa-phone"></i>
<div>
<h4>Téléphone</h4>
<p>07 72 29 37 48</p>
</div>
</div>
<div class="contact-card">
<i class="fa-solid fa-laptop"></i>
<div>
<h4>Accès formation</h4>
<p>100% en ligne<br>Accès immédiat après achat</p>
</div>
</div>
</div>
</div>
</section>

<!-- ========== CTA FINAL ========== -->
<section class="cta" id="cta-final">
<div class="container">
<div class="cta-inner fade">
<h2>Prête à maîtriser<br><em>le Head Spa ?</em></h2>
<p>Accès immédiat · Paiement sécurisé · Sans engagement</p>
<button class="btn js-open-modal">Accéder à la formation</button>
</div>
</div>
</section>

<!-- ========== FOOTER ========== -->
<footer>
<div class="container">
<div class="footer-grid">
<div>
<div class="footer-brand">Head Spa Lyon By F.</div>
<p class="footer-desc">Formation Head Spa 100% en ligne<br>Lyon, France</p>
<div class="footer-info" style="margin-top: 20px;">
<p style="color: rgba(255,255,255,0.45); font-size: 0.85rem;">
<i class="fa-solid fa-location-dot" style="color: var(--primary); margin-right: 8px;"></i>
34 place des Maisons Neuves, 69100 Villeurbanne
</p>
</div>
</div>
<div class="footer-col">
<h4>Navigation</h4>
<ul>
<li><a href="#accueil">Accueil</a></li>
<li><a href="#programme">Programme</a></li>
<li><a href="#tarifs">Tarifs</a></li>
<li><a href="#faq">FAQ</a></li>
</ul>
</div>
</div>
<div class="footer-bottom">&copy; 2026 Head Spa Lyon By F. — Tous droits réservés</div>
</div>
</footer>
<!-- ========== WHATSAPP FLOAT ========== -->
<a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaite%20avoir%20des%20informations"
   class="whatsapp-float"
   target="_blank"
   aria-label="Contact WhatsApp">

    <img src="images/10_29_00.png" alt="WhatsApp">

    <span class="whatsapp-text">
        Écrivez-nous sur WhatsApp
    </span>

</a>

<!-- ========== MODAL INSCRIPTION ========== -->
<div class="modal" id="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
<div class="modal-overlay" id="modalOverlay"></div>
<div class="modal-box">
<button class="modal-close" id="modalClose" aria-label="Fermer le formulaire">&times;</button>
<h3 id="modalTitle">Inscription à la formation</h3>
<p>Remplissez le formulaire pour accéder à votre formation</p>
<form method="POST" action="traitement_inscription.php" novalidate>
<div class="form-group">
<label for="nom">Nom *</label>
<input type="text" id="nom" name="nom" required autocomplete="family-name">
</div>
<div class="form-group">
<label for="prenom">Prénom *</label>
<input type="text" id="prenom" name="prenom" required autocomplete="given-name">
</div>
<div class="form-group">
<label for="email">Email *</label>
<input type="email" id="email" name="email" required autocomplete="email">
</div>
<div class="form-group">
<label for="telephone">Téléphone *</label>
<input type="tel" id="telephone" name="telephone" required autocomplete="tel" pattern="[0-9\s]{10,15}">
</div>
<div class="form-group">
<label for="ville">Ville *</label>
<input type="text" id="ville" name="ville" required autocomplete="address-level2">
</div>
<div class="form-group">
<label for="experience">Votre expérience</label>
<select id="experience" name="experience">
<option value="debutant">Débutante</option>
<option value="intermediaire">Intermédiaire</option>
<option value="experimente">Expérimentée</option>
<option value="professionnel">Professionnelle</option>
</select>
</div>
<div class="form-check">
<input type="checkbox" id="cgu" name="cgu" required>
<label for="cgu">J'accepte les <a href="#">conditions générales</a> *</label>
</div>
<button type="submit" class="btn" style="width:100%; text-align:center;">Procéder au paiement</button>
<p class="modal-secure"><i class="fa-solid fa-lock"></i> Paiement sécurisé · Sans engagement</p>
</form>
</div>
</div>

<!-- ========== SCRIPTS ========== -->
<script>
// ---- Scroll reveal ----
var fadeEls = document.querySelectorAll('.fade');
var revealObs = new IntersectionObserver(function(entries) {
for (var i = 0; i < entries.length; i++) {
if (entries[i].isIntersecting) {
entries[i].target.classList.add('visible');
revealObs.unobserve(entries[i].target);
}
}
}, { threshold: 0.1 });
for (var i = 0; i < fadeEls.length; i++) {
revealObs.observe(fadeEls[i]);
}

// ---- Accordéon modules ----
var moduleHeaders = document.querySelectorAll('.module-header');
for (var i = 0; i < moduleHeaders.length; i++) {
moduleHeaders[i].addEventListener('click', function() {
var item = this.closest('.module-item');
var allItems = document.querySelectorAll('.module-item');
for (var j = 0; j < allItems.length; j++) {
if (allItems[j] !== item) {
allItems[j].classList.remove('open');
allItems[j].querySelector('.module-header').setAttribute('aria-expanded', 'false');
}
}
item.classList.toggle('open');
this.setAttribute('aria-expanded', item.classList.contains('open'));
});
// Support clavier
moduleHeaders[i].addEventListener('keydown', function(e) {
if (e.key === 'Enter' || e.key === ' ') {
e.preventDefault();
this.click();
}
});
}

// ---- Accordéon FAQ ----
var faqQuestions = document.querySelectorAll('.faq-question');
for (var i = 0; i < faqQuestions.length; i++) {
faqQuestions[i].addEventListener('click', function() {
var item = this.closest('.faq-item');
var allFaq = document.querySelectorAll('.faq-item');
for (var j = 0; j < allFaq.length; j++) {
if (allFaq[j] !== item) {
allFaq[j].classList.remove('open');
allFaq[j].querySelector('.faq-question').setAttribute('aria-expanded', 'false');
}
}
item.classList.toggle('open');
this.setAttribute('aria-expanded', item.classList.contains('open'));
});
}

// ---- Slider élèves avec défilement automatique ----
var track = document.getElementById('sliderTrack');
var currentSlide = 0;
var cardsPerView = 3;
var autoPlayInterval;
var cards = track.querySelectorAll('.eleve-card');
var totalSlides = cards.length;

// Créer les dots de navigation
var dotsContainer = document.createElement('div');
dotsContainer.className = 'slider-dots';
for (var i = 0; i < totalSlides; i++) {
var dot = document.createElement('button');
dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
dot.setAttribute('aria-label', 'Voir témoignage ' + (i + 1));
dot.addEventListener('click', function(index) {
return function() {
goToSlide(index);
resetAutoPlay();
};
}(i));
dotsContainer.appendChild(dot);
}
document.querySelector('.slider-wrapper').appendChild(dotsContainer);

var dots = dotsContainer.querySelectorAll('.slider-dot');

function getNbCards() {
if (window.innerWidth <= 480) return 1;
if (window.innerWidth <= 768) return 1;
if (window.innerWidth <= 1024) return 2;
return 3;
}

function updateSlider() {
cardsPerView = getNbCards();
var maxSlide = Math.max(0, totalSlides - cardsPerView);
if (currentSlide > maxSlide) currentSlide = maxSlide;
var cardWidth = cards.length > 0 ? cards[0].offsetWidth + 24 : 0;
track.style.transform = 'translateX(-' + (currentSlide * cardWidth) + 'px)';

// Update dots
for (var i = 0; i < dots.length; i++) {
dots[i].classList.remove('active');
}
if (dots[currentSlide]) {
dots[currentSlide].classList.add('active');
}
}

function goToSlide(index) {
var maxSlide = Math.max(0, totalSlides - cardsPerView);
currentSlide = index;
if (currentSlide < 0) currentSlide = 0;
if (currentSlide > maxSlide) currentSlide = maxSlide;
updateSlider();
}

function nextSlide() {
var maxSlide = Math.max(0, totalSlides - cardsPerView);
currentSlide++;
if (currentSlide > maxSlide) currentSlide = 0;
updateSlider();
}

function resetAutoPlay() {
clearInterval(autoPlayInterval);
autoPlayInterval = setInterval(nextSlide, 5000); // Change toutes les 5 secondes
}

// Navigation boutons
document.getElementById('btnPrev').addEventListener('click', function() { 
goToSlide(currentSlide - 1);
resetAutoPlay();
});

document.getElementById('btnNext').addEventListener('click', function() { 
goToSlide(currentSlide + 1);
resetAutoPlay();
});

// Initialisation
window.addEventListener('load', function() {
updateSlider();
resetAutoPlay();
});

// Pause au survol
var sliderWrapper = document.querySelector('.slider-wrapper');
sliderWrapper.addEventListener('mouseenter', function() {
clearInterval(autoPlayInterval);
});

sliderWrapper.addEventListener('mouseleave', function() {
resetAutoPlay();
});

// Resize
var resizeTimer;
window.addEventListener('resize', function() {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(updateSlider, 250);
});

// Debounce resize
window.addEventListener('resize', function() {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(updateSlider, 250);
});

// Initialisation
window.addEventListener('load', updateSlider);
// Debounce resize
window.addEventListener('resize', function() {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(updateSlider, 250);
});

// Initialisation slider
window.addEventListener('load', updateSlider);

// ---- Modal ----
var modal = document.getElementById('modal');
var openBtns = document.querySelectorAll('.js-open-modal');
var closeBtn = document.getElementById('modalClose');
var overlay  = document.getElementById('modalOverlay');

function openModal() {
modal.classList.add('active');
document.body.style.overflow = 'hidden';
closeBtn.focus();
}

function fermerModal() {
modal.classList.remove('active');
document.body.style.overflow = '';
}

for (var i = 0; i < openBtns.length; i++) {
openBtns[i].addEventListener('click', openModal);
openBtns[i].addEventListener('keydown', function(e) {
if (e.key === 'Enter' || e.key === ' ') {
e.preventDefault();
openModal();
}
});
}

closeBtn.addEventListener('click', fermerModal);
overlay.addEventListener('click', fermerModal);
document.addEventListener('keydown', function(e) {
if (e.key === 'Escape' && modal.classList.contains('active')) fermerModal();
});

// ---- Smooth scroll pour ancres ----
document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
anchor.addEventListener('click', function(e) {
var targetId = this.getAttribute('href');
if (targetId !== '#') {
var target = document.querySelector(targetId);
if (target) {
e.preventDefault();
target.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
}
});
});
</script>
</body>
</html>