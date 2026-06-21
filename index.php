<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Елена Мирная — практикующий психолог. Индивидуальная и семейная терапия онлайн и очно.">
  <title>Елена Мирная — Психолог</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Manrope:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-primary: #F8F5F0;
      --bg-secondary: #F0EBE4;
      --accent: #8FA89A;
      --accent-hover: #7A9688;
      --accent-soft: rgba(143, 168, 154, 0.14);
      --cta: #8FA89A;
      --cta-hover: #7A9688;
      --text-primary: #2C2C2C;
      --text-secondary: #5E5E5E;
      --white: #FFFFFF;
      --border: #D4B5A0;
      --shadow: 0 12px 40px rgba(143, 168, 154, 0.14);
      --shadow-sm: 0 6px 20px rgba(143, 168, 154, 0.1);
      --radius: 16px;
      --radius-sm: 10px;
      --radius-btn: 8px;
      --header-height: 72px;
      --font-heading: 'Cormorant Garamond', Georgia, serif;
      --font-body: 'Manrope', system-ui, sans-serif;
      --transition: 0.4s ease;
    }

    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: var(--header-height);
    }

    body {
      font-family: var(--font-body);
      font-size: 16px;
      line-height: 1.7;
      color: var(--text-primary);
      background: var(--bg-primary);
      overflow-x: hidden;
    }

    img { max-width: 100%; display: block; }
    a { color: inherit; text-decoration: none; }
    ul { list-style: none; }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    h1, h2, h3 {
      font-family: var(--font-heading);
      font-weight: 600;
      line-height: 1.25;
      color: var(--text-primary);
    }

    h1 { font-size: 32px; }
    h2 { font-size: 26px; margin-bottom: 16px; }
    h3 { font-size: 20px; }

    @media (min-width: 1024px) {
      body { font-size: 17px; }
      h1 { font-size: 48px; }
      h2 { font-size: 36px; margin-bottom: 24px; }
      h3 { font-size: 24px; }
    }

    .section {
      padding: 64px 0;
    }

    @media (min-width: 768px) {
      .section { padding: 80px 0; }
    }

    @media (min-width: 1024px) {
      .section { padding: 100px 0; }
    }

    .section--alt { background: var(--bg-secondary); }

    .section-header {
      text-align: center;
      max-width: 640px;
      margin: 0 auto 48px;
    }

    .section-header p {
      color: var(--text-secondary);
      margin-top: 12px;
    }

    .section-label {
      display: inline-block;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 12px;
    }

    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 28px;
      font-family: var(--font-body);
      font-size: 15px;
      font-weight: 500;
      border-radius: var(--radius-btn);
      border: 1.5px solid transparent;
      cursor: pointer;
      transition: background var(--transition), color var(--transition), border-color var(--transition), box-shadow var(--transition);
      white-space: nowrap;
    }

    .btn--cta {
      background: var(--cta);
      color: var(--white);
      border-color: var(--cta);
    }

    .btn--cta:hover {
      background: var(--cta-hover);
      border-color: var(--cta-hover);
      box-shadow: var(--shadow-sm);
    }

    .btn--outline {
      background: transparent;
      color: var(--accent);
      border-color: var(--border);
    }

    .btn--outline:hover {
      background: var(--accent-soft);
      border-color: var(--accent);
      color: var(--accent-hover);
    }

    .btn--sm {
      padding: 10px 20px;
      font-size: 14px;
    }

    /* Photos */
    .photo-frame {
      border-radius: var(--radius);
      overflow: hidden;
      position: relative;
      background: var(--bg-secondary);
      box-shadow: 0 16px 48px rgba(143, 168, 154, 0.18);
    }

    .photo-frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .photo-frame--breathe {
      animation: breathe 4s ease-in-out infinite;
    }

    @keyframes breathe {
      0%, 100% {
        transform: scale(1);
        box-shadow: 0 16px 48px rgba(143, 168, 154, 0.16);
      }
      50% {
        transform: scale(1.02);
        box-shadow: 0 24px 56px rgba(143, 168, 154, 0.22);
      }
    }

    /* Scroll animations */
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* ========== HEADER ========== */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      height: var(--header-height);
      transition: background var(--transition), box-shadow var(--transition), backdrop-filter var(--transition);
    }

    .header.scrolled {
      background: rgba(248, 245, 240, 0.88);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 2px 20px rgba(44, 44, 44, 0.05);
    }

    .header__inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 100%;
    }

    .header__logo {
      display: flex;
      flex-direction: column;
      line-height: 1.15;
    }

    .brand-name {
      font-family: var(--font-heading);
      font-size: 22px;
      font-weight: 600;
      letter-spacing: 0.02em;
      color: var(--text-primary);
    }

    .brand-name__accent {
      font-style: italic;
      font-weight: 500;
      color: var(--accent);
    }

    .brand-tagline {
      font-family: var(--font-body);
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--text-secondary);
      margin-top: 2px;
    }

    @media (min-width: 768px) {
      .brand-name { font-size: 26px; }
      .brand-tagline { font-size: 11px; }
    }

    .header__nav {
      display: none;
      align-items: center;
      gap: 32px;
    }

    @media (min-width: 1024px) {
      .header__nav { display: flex; }
    }

    .header__nav a {
      font-size: 15px;
      color: var(--text-secondary);
      transition: color var(--transition);
      position: relative;
    }

    .header__nav a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--accent);
      transition: width var(--transition);
    }

    .header__nav a:hover {
      color: var(--accent);
    }

    .header__nav a:hover::after {
      width: 100%;
    }

    .header__actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .header__cta {
      display: none;
    }

    @media (min-width: 768px) {
      .header__cta { display: inline-flex; }
    }

    .burger {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 5px;
      width: 40px;
      height: 40px;
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px;
    }

    @media (min-width: 1024px) {
      .burger { display: none; }
    }

    .burger span {
      display: block;
      width: 24px;
      height: 2px;
      background: var(--text-primary);
      transition: all var(--transition);
      border-radius: 2px;
    }

    .burger.active span:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }

    .burger.active span:nth-child(2) {
      opacity: 0;
    }

    .burger.active span:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
    }

    /* Mobile menu */
    .mobile-menu {
      position: fixed;
      top: 0;
      right: 0;
      width: min(320px, 85vw);
      height: 100vh;
      background: var(--white);
      z-index: 999;
      padding: calc(var(--header-height) + 24px) 32px 32px;
      transform: translateX(100%);
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: -8px 0 32px rgba(45, 41, 38, 0.1);
    }

    .mobile-menu.open {
      transform: translateX(0);
    }

    .mobile-menu__overlay {
      position: fixed;
      inset: 0;
      background: rgba(45, 41, 38, 0.4);
      z-index: 998;
      opacity: 0;
      visibility: hidden;
      transition: all var(--transition);
    }

    .mobile-menu__overlay.open {
      opacity: 1;
      visibility: visible;
    }

    .mobile-menu nav {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .mobile-menu nav a {
      font-size: 18px;
      color: var(--text-primary);
      padding-bottom: 8px;
      border-bottom: 1px solid var(--border);
    }

    .mobile-menu .btn {
      margin-top: 24px;
      width: 100%;
    }

    /* ========== HERO ========== */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: var(--header-height);
      position: relative;
      overflow: hidden;
    }

    .hero__decor {
      position: absolute;
      border-radius: 50%;
      pointer-events: none;
    }

    .hero__decor--1 {
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(143, 168, 154, 0.12), transparent 70%);
      top: -100px;
      right: -100px;
    }

    .hero__decor--2 {
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(212, 181, 160, 0.15), transparent 70%);
      bottom: 10%;
      left: -80px;
    }

    .hero__decor--3 {
      width: 200px;
      height: 200px;
      background: radial-gradient(circle, rgba(143, 168, 154, 0.08), transparent 70%);
      top: 40%;
      right: 30%;
    }

    .hero__grid {
      display: grid;
      gap: 40px;
      align-items: center;
      position: relative;
      z-index: 1;
    }

    @media (min-width: 1024px) {
      .hero__grid {
        grid-template-columns: 1fr 1fr;
        gap: 60px;
      }
    }

    .hero__eyebrow {
      font-size: 14px;
      font-weight: 500;
      color: var(--accent);
      letter-spacing: 0.02em;
      margin-bottom: 16px;
    }

    .hero__title {
      margin-bottom: 20px;
    }

    .hero__subtitle {
      color: var(--text-secondary);
      margin-bottom: 32px;
      max-width: 520px;
    }

    .hero__buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 40px;
    }

    .hero__stats {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
    }

    .hero__stat {
      text-align: left;
    }

    .hero__stat-value {
      font-family: var(--font-heading);
      font-size: 28px;
      font-weight: 700;
      color: var(--accent);
      line-height: 1.2;
    }

    @media (min-width: 768px) {
      .hero__stat-value { font-size: 32px; }
    }

    .hero__stat-label {
      font-size: 13px;
      color: var(--text-secondary);
      margin-top: 4px;
    }

    .hero__photo {
      width: 100%;
      max-width: 450px;
      height: 420px;
      margin: 0 auto;
    }

    @media (min-width: 768px) {
      .hero__photo { height: 500px; }
    }

    @media (min-width: 1024px) {
      .hero__photo {
        height: 550px;
        margin: 0 0 0 auto;
      }
    }

    .hero__photo .photo-frame {
      width: 100%;
      height: 100%;
    }

    /* ========== ABOUT ========== */
    .about__grid {
      display: grid;
      gap: 40px;
      align-items: center;
    }

    @media (min-width: 768px) {
      .about__grid {
        grid-template-columns: 1fr 1.2fr;
        gap: 60px;
      }
    }

    .about__photo {
      width: 100%;
      max-width: 400px;
      height: 420px;
      margin: 0 auto;
    }

    @media (min-width: 768px) {
      .about__photo {
        height: 500px;
        margin: 0;
      }
    }

    .about__photo .photo-frame {
      width: 100%;
      height: 100%;
    }

    .about__text p {
      color: var(--text-secondary);
      margin-bottom: 16px;
    }

    .about__text p:last-of-type {
      margin-bottom: 24px;
    }

    .about__credentials {
      display: grid;
      gap: 12px;
    }

    .about__credential {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 14px 16px;
      background: var(--white);
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
    }

    .about__credential svg {
      flex-shrink: 0;
      width: 20px;
      height: 20px;
      color: var(--accent);
      margin-top: 2px;
    }

    .about__credential span {
      font-size: 15px;
      color: var(--text-primary);
    }

    /* ========== DIRECTIONS ========== */
    .directions__grid {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 768px) {
      .directions__grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .directions__grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
      }
    }

    .direction-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 28px;
      border: 1px solid var(--border);
      transition: box-shadow var(--transition), border-color var(--transition);
    }

    .direction-card:hover {
      box-shadow: var(--shadow-sm);
      border-color: var(--accent);
    }

    .direction-card__icon {
      width: 48px;
      height: 48px;
      background: var(--accent-soft);
      border-radius: var(--radius-sm);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
    }

    .direction-card__icon svg {
      width: 22px;
      height: 22px;
      stroke: var(--accent);
    }

    .direction-card h3 {
      margin-bottom: 8px;
    }

    .direction-card p {
      font-size: 15px;
      color: var(--text-secondary);
    }

    /* ========== HOW I WORK ========== */
    .process__steps {
      display: grid;
      gap: 24px;
      margin-bottom: 64px;
    }

    @media (min-width: 768px) {
      .process__steps {
        grid-template-columns: repeat(3, 1fr);
        gap: 32px;
      }
    }

    .process-step {
      text-align: center;
      padding: 32px 24px;
      background: var(--white);
      border-radius: var(--radius);
      border: 1px solid var(--border);
      position: relative;
    }

    .process-step__num {
      width: 48px;
      height: 48px;
      background: var(--accent);
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-heading);
      font-size: 20px;
      font-weight: 700;
      margin: 0 auto 16px;
    }

    .process-step h3 {
      margin-bottom: 8px;
    }

    .process-step p {
      font-size: 15px;
      color: var(--text-secondary);
    }

    .process__benefits {
      display: grid;
      gap: 16px;
      margin-bottom: 64px;
    }

    @media (min-width: 768px) {
      .process__benefits {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .process__benefits {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .benefit-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 16px 20px;
      background: var(--bg-primary);
      border-radius: var(--radius-sm);
    }

    .benefit-item svg {
      flex-shrink: 0;
      width: 22px;
      height: 22px;
      color: var(--accent);
    }

    .benefit-item span {
      font-size: 15px;
    }

    /* Pricing */
    .pricing__grid {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 768px) {
      .pricing__grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .pricing-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 32px 28px;
      border: 1px solid var(--border);
      text-align: center;
      transition: box-shadow var(--transition), border-color var(--transition);
    }

    .pricing-card--featured {
      border-color: var(--accent);
      box-shadow: var(--shadow-sm);
      position: relative;
    }

    .pricing-card--featured::before {
      content: 'Популярно';
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--accent);
      color: var(--white);
      font-size: 12px;
      font-weight: 600;
      padding: 4px 16px;
      border-radius: var(--radius-btn);
    }

    .pricing-card:hover {
      box-shadow: var(--shadow-sm);
      border-color: var(--accent);
    }

    .pricing-card__price {
      font-family: var(--font-heading);
      font-size: 36px;
      font-weight: 700;
      color: var(--accent);
      margin: 16px 0 8px;
    }

    .pricing-card__title {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .pricing-card__desc {
      font-size: 14px;
      color: var(--text-secondary);
      margin-bottom: 20px;
    }

    /* FAQ */
    .faq__list {
      max-width: 760px;
      margin: 0 auto;
    }

    .faq-item {
      border-bottom: 1px solid var(--border);
    }

    .faq-item__question {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      padding: 20px 0;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      font-family: var(--font-body);
      font-size: 16px;
      font-weight: 500;
      color: var(--text-primary);
    }

    @media (min-width: 768px) {
      .faq-item__question { font-size: 17px; }
    }

    .faq-item__icon {
      flex-shrink: 0;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: var(--bg-secondary);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform var(--transition), background var(--transition);
    }

    .faq-item.open .faq-item__icon {
      transform: rotate(45deg);
      background: var(--accent);
      color: var(--white);
    }

    .faq-item__answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.4s ease;
    }

    .faq-item.open .faq-item__answer {
      max-height: 300px;
      padding-bottom: 20px;
    }

    .faq-item__answer p {
      color: var(--text-secondary);
      font-size: 15px;
    }

    /* ========== REVIEWS ========== */
    .reviews__grid {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 768px) {
      .reviews__grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .reviews__grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .review-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 28px;
      border: 1px solid var(--border);
      display: flex;
      flex-direction: column;
    }

    .review-card__stars {
      color: var(--accent);
      font-size: 16px;
      letter-spacing: 3px;
      margin-bottom: 16px;
    }

    .review-card__text {
      color: var(--text-secondary);
      font-size: 15px;
      flex: 1;
      margin-bottom: 20px;
      font-style: italic;
    }

    .review-card__author {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .review-card__avatar {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: var(--bg-secondary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-heading);
      font-weight: 600;
      color: var(--accent);
      font-size: 16px;
    }

    .review-card__name {
      font-weight: 600;
      font-size: 15px;
    }

    .review-card__meta {
      font-size: 13px;
      color: var(--text-secondary);
    }

    /* ========== CONTACTS ========== */
    .contacts__grid {
      display: grid;
      gap: 40px;
    }

    @media (min-width: 768px) {
      .contacts__grid {
        grid-template-columns: 1fr 1fr;
        gap: 60px;
      }
    }

    .contacts__info h3 {
      margin-bottom: 20px;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 20px;
    }

    .contact-item__icon {
      width: 44px;
      height: 44px;
      background: var(--bg-secondary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .contact-item__icon svg {
      width: 20px;
      height: 20px;
      color: var(--accent);
    }

    .contact-item__label {
      font-size: 13px;
      color: var(--text-secondary);
      margin-bottom: 2px;
    }

    .contact-item__value {
      font-size: 16px;
      font-weight: 500;
    }

    .contact-item__value a:hover {
      color: var(--accent);
    }

    .contacts__social {
      display: flex;
      gap: 12px;
      margin-top: 24px;
    }

    .social-link {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: var(--accent);
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background var(--transition), transform var(--transition);
    }

    .social-link:hover {
      background: var(--accent-hover);
    }

    .social-link svg {
      width: 20px;
      height: 20px;
    }

    .contact-form {
      background: var(--white);
      border-radius: var(--radius);
      padding: 32px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow-sm);
    }

    .contact-form h3 {
      margin-bottom: 24px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 6px;
      color: var(--text-primary);
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      font-family: var(--font-body);
      font-size: 15px;
      color: var(--text-primary);
      background: var(--bg-primary);
      transition: border-color var(--transition);
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--accent);
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-checkbox {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 20px;
    }

    .form-checkbox input {
      margin-top: 4px;
      accent-color: var(--accent);
    }

    .form-checkbox label {
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.5;
    }

    .contact-form .btn {
      width: 100%;
    }

    /* ========== FOOTER ========== */
    .footer {
      background: var(--text-primary);
      color: rgba(255, 255, 255, 0.7);
      padding: 40px 0 24px;
      font-size: 14px;
    }

    .footer__inner {
      display: flex;
      flex-direction: column;
      gap: 24px;
      align-items: center;
      text-align: center;
    }

    @media (min-width: 768px) {
      .footer__inner {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
      }
    }

    .footer__logo {
      font-family: var(--font-heading);
      font-size: 22px;
      font-weight: 600;
      color: var(--white);
      margin-bottom: 4px;
    }

    .footer__logo em {
      font-style: italic;
      font-weight: 500;
      color: var(--accent);
    }

    .footer__links {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
    }

    .footer__links a:hover {
      color: var(--white);
    }

    .footer__copy {
      font-size: 13px;
    }

    /* Cookie banner */
    .cookie-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: var(--white);
      border-top: 1px solid var(--border);
      padding: 16px 20px;
      z-index: 1001;
      box-shadow: 0 -4px 20px rgba(45, 41, 38, 0.08);
      transform: translateY(100%);
      transition: transform 0.4s ease;
    }

    .cookie-banner.visible {
      transform: translateY(0);
    }

    .cookie-banner__inner {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 12px;
      align-items: flex-start;
    }

    @media (min-width: 768px) {
      .cookie-banner__inner {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
      }
    }

    .cookie-banner p {
      font-size: 14px;
      color: var(--text-secondary);
    }

    .cookie-banner p a {
      color: var(--accent);
      text-decoration: underline;
    }

    .cookie-banner__actions {
      display: flex;
      gap: 8px;
      flex-shrink: 0;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container header__inner">
      <a href="#" class="header__logo">
        <span class="brand-name">Елена <span class="brand-name__accent">Мирная</span></span>
        <span class="brand-tagline">Практикующий психолог</span>
      </a>
      <nav class="header__nav">
        <a href="#about">Обо мне</a>
        <a href="#directions">Направления</a>
        <a href="#process">Как я работаю</a>
        <a href="#reviews">Отзывы</a>
        <a href="#contacts">Контакты</a>
      </nav>
      <div class="header__actions">
        <a href="#contacts" class="btn btn--cta btn--sm header__cta">Записаться</a>
        <button class="burger" id="burger" aria-label="Открыть меню">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile menu -->
  <div class="mobile-menu__overlay" id="menuOverlay"></div>
  <div class="mobile-menu" id="mobileMenu">
    <nav>
      <a href="#about" class="mobile-link">Обо мне</a>
      <a href="#directions" class="mobile-link">Направления</a>
      <a href="#process" class="mobile-link">Как я работаю</a>
      <a href="#reviews" class="mobile-link">Отзывы</a>
      <a href="#contacts" class="mobile-link">Контакты</a>
      <a href="#contacts" class="btn btn--cta mobile-link">Записаться</a>
    </nav>
  </div>

  <!-- HERO -->
  <section class="hero" id="hero">
    <div class="hero__decor hero__decor--1"></div>
    <div class="hero__decor hero__decor--2"></div>
    <div class="hero__decor hero__decor--3"></div>
    <div class="container">
      <div class="hero__grid">
        <div class="hero__content">
          <p class="hero__eyebrow reveal">Практикующий психолог · Онлайн и очно</p>
          <h1 class="hero__title reveal reveal-delay-1">Помогу вам услышать себя и&nbsp;найти опору внутри</h1>
          <p class="hero__subtitle reveal reveal-delay-2">Индивидуальная и семейная терапия для тех, кто готов к переменам. Бережно, без давления, в вашем темпе.</p>
          <div class="hero__buttons reveal reveal-delay-3">
            <a href="#contacts" class="btn btn--cta">Записаться на консультацию</a>
            <a href="#about" class="btn btn--outline">Узнать подробнее</a>
          </div>
          <div class="hero__stats reveal reveal-delay-4">
            <div class="hero__stat">
              <div class="hero__stat-value" data-count="12">0+</div>
              <div class="hero__stat-label">лет практики</div>
            </div>
            <div class="hero__stat">
              <div class="hero__stat-value" data-count="2000">0+</div>
              <div class="hero__stat-label">консультаций</div>
            </div>
            <div class="hero__stat">
              <div class="hero__stat-value" data-count="150">0+</div>
              <div class="hero__stat-label">постоянных клиентов</div>
            </div>
          </div>
        </div>
        <div class="hero__photo reveal">
          <div class="photo-frame photo-frame--breathe">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=900&h=1100&fit=crop&q=80"
              alt="Елена Мирная — практикующий психолог"
              width="450"
              height="550"
              loading="eager"
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="section section--alt" id="about">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Знакомство</span>
        <h2>Обо мне</h2>
      </div>
      <div class="about__grid">
        <div class="about__photo reveal">
          <div class="photo-frame">
            <img
              src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&h=1000&fit=crop&q=80"
              alt="Кабинет психолога — спокойное и безопасное пространство"
              width="400"
              height="500"
              loading="lazy"
            >
          </div>
        </div>
        <div class="about__text">
          <p class="reveal">Здравствуйте! Меня зовут Елена, я практикующий психолог, работаю в подходах когнитивно-поведенческой терапии и эмоционально-фокусированной терапии.</p>
          <p class="reveal reveal-delay-1">Более 12 лет я помогаю людям проживать сложные периоды: тревогу, потерю смысла, кризисы в отношениях, профессиональное выгорание. Я верю, что каждый человек уже имеет внутренние ресурсы — иногда нужен лишь проводник, чтобы их обнаружить.</p>
          <p class="reveal reveal-delay-2">Регулярно прохожу супервизию и повышаю квалификацию. Мой интегративный подход позволяет подбирать методики индивидуально — так, чтобы каждая консультация была максимально полезной именно для вас.</p>
          <div class="about__credentials">
            <div class="about__credential reveal reveal-delay-2">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.1 2.7 2 6 2s6-.9 6-2v-5"/></svg>
              <span>Высшее психологическое образование, магистратура КПТ</span>
            </div>
            <div class="about__credential reveal reveal-delay-3">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>Член Российского психологического общества</span>
            </div>
            <div class="about__credential reveal reveal-delay-3">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>55 минут — стандартная продолжительность консультации</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DIRECTIONS -->
  <section class="section" id="directions">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">С чем я работаю</span>
        <h2>Направления</h2>
        <p>Помогаю в самых разных жизненных ситуациях — от острых кризисов до глубокой личностной трансформации</p>
      </div>
      <div class="directions__grid">
        <div class="direction-card reveal">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22c4-4 8-7.5 8-12a8 8 0 1 0-16 0c0 4.5 4 8 8 12z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h3>Тревога и стресс</h3>
          <p>Панические атаки, навязчивые мысли, бессонница, хроническое напряжение. Научимся управлять тревогой и возвращать спокойствие.</p>
        </div>
        <div class="direction-card reveal reveal-delay-1">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Отношения и семья</h3>
          <p>Конфликты в паре, сложности с детьми и подростками, развод, созависимость. Найдём новые способы понимать друг друга.</p>
        </div>
        <div class="direction-card reveal reveal-delay-2">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3>Самооценка и рост</h3>
          <p>Низкая самооценка, перфекционизм, поиск себя и своего пути. Раскроем ваши сильные стороны и внутренние ресурсы.</p>
        </div>
        <div class="direction-card reveal">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          </div>
          <h3>Выгорание</h3>
          <p>Профессиональное выгорание, потеря мотивации, ощущение «застоя». Восстановим энергию и найдём баланс между работой и жизнью.</p>
        </div>
        <div class="direction-card reveal reveal-delay-1">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
          </div>
          <h3>Кризисы и потери</h3>
          <p>Горевание, жизненные переломы, потеря смысла. Бережно пройдём через трудный период и найдём опору для движения вперёд.</p>
        </div>
        <div class="direction-card reveal reveal-delay-2">
          <div class="direction-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <h3>Дети и подростки</h3>
          <p>Школьные трудности, буллинг, тревожность, проблемы в общении. Помогу ребёнку и поддержу родителей в этом процессе.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW I WORK -->
  <section class="section section--alt" id="process">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Процесс</span>
        <h2>Как я работаю</h2>
        <p>Прозрачный и понятный процесс — от первого знакомства до устойчивых изменений</p>
      </div>

      <div class="process__steps">
        <div class="process-step reveal">
          <div class="process-step__num">1</div>
          <h3>Знакомство</h3>
          <p>Вы оставляете заявку или звоните. Мы договариваемся о времени и формате — очно или онлайн.</p>
        </div>
        <div class="process-step reveal reveal-delay-1">
          <div class="process-step__num">2</div>
          <h3>Первая сессия</h3>
          <p>Обсуждаем ваш запрос, определяем цели и составляем план работы. Вы решаете, комфортно ли вам продолжать.</p>
        </div>
        <div class="process-step reveal reveal-delay-2">
          <div class="process-step__num">3</div>
          <h3>Регулярная работа</h3>
          <p>Еженедельные встречи по 55 минут. Между сессиями — небольшие задания для закрепления изменений.</p>
        </div>
      </div>

      <div class="process__benefits">
        <div class="benefit-item reveal">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>100% конфиденциальность</span>
        </div>
        <div class="benefit-item reveal reveal-delay-1">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Индивидуальный подбор методик</span>
        </div>
        <div class="benefit-item reveal reveal-delay-2">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Онлайн по всему миру</span>
        </div>
        <div class="benefit-item reveal">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Удобное время записи</span>
        </div>
        <div class="benefit-item reveal reveal-delay-1">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Скидка при пакете из 4 сессий</span>
        </div>
        <div class="benefit-item reveal reveal-delay-2">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>55 минут — полноценная сессия</span>
        </div>
      </div>

      <div class="section-header reveal">
        <h2>Стоимость</h2>
      </div>
      <div class="pricing__grid">
        <div class="pricing-card reveal">
          <div class="pricing-card__title">Индивидуальная</div>
          <div class="pricing-card__price">4 500 ₽</div>
          <div class="pricing-card__desc">Разовая консультация взрослого</div>
          <a href="#contacts" class="btn btn--outline btn--sm">Записаться</a>
        </div>
        <div class="pricing-card pricing-card--featured reveal reveal-delay-1">
          <div class="pricing-card__title">Пакет 4 сессии</div>
          <div class="pricing-card__price">4 000 ₽</div>
          <div class="pricing-card__desc">За сессию · скидка 10%</div>
          <a href="#contacts" class="btn btn--cta btn--sm">Записаться</a>
        </div>
        <div class="pricing-card reveal reveal-delay-2">
          <div class="pricing-card__title">Семейная / парная</div>
          <div class="pricing-card__price">6 500 ₽</div>
          <div class="pricing-card__desc">Разовая консультация пары или семьи</div>
          <a href="#contacts" class="btn btn--outline btn--sm">Записаться</a>
        </div>
      </div>

      <div class="section-header reveal" style="margin-top: 64px;">
        <h2>Частые вопросы</h2>
      </div>
      <div class="faq__list">
        <div class="faq-item reveal">
          <button class="faq-item__question">
            Сколько длится консультация?
            <span class="faq-item__icon">+</span>
          </button>
          <div class="faq-item__answer">
            <p>Стандартная консультация длится 55 минут. При необходимости время может быть увеличено по предварительной договорённости.</p>
          </div>
        </div>
        <div class="faq-item reveal reveal-delay-1">
          <button class="faq-item__question">
            Как проходит онлайн-консультация?
            <span class="faq-item__icon">+</span>
          </button>
          <div class="faq-item__answer">
            <p>Обычно в формате видеозвонка — это помогает лучше понять ваше состояние. Также возможны аудио-звонок или чат, если вам так комфортнее.</p>
          </div>
        </div>
        <div class="faq-item reveal reveal-delay-2">
          <button class="faq-item__question">
            Сколько нужно сессий?
            <span class="faq-item__icon">+</span>
          </button>
          <div class="faq-item__answer">
            <p>Зависит от запроса. В среднем для устойчивых изменений нужно 8–12 встреч. На первой сессии мы обсудим ориентировочный план.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-item__question">
            Можно ли помочь за одну консультацию?
            <span class="faq-item__icon">+</span>
          </button>
          <div class="faq-item__answer">
            <p>Иногда да — особенно при конкретном запросе. Но устойчивые изменения обычно требуют нескольких встреч. Моя задача — не «быстрый совет», а реальная помощь.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- REVIEWS -->
  <section class="section" id="reviews">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Обратная связь</span>
        <h2>Отзывы</h2>
        <p>Истории людей, с которыми я работала. Имена изменены для сохранения конфиденциальности.</p>
      </div>
      <div class="reviews__grid">
        <div class="review-card reveal">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«Пришла с сильной тревогой, которая мешала жить. Елена помогла понять её причины и научила справляться. Сейчас чувствую себя гораздо спокойнее и увереннее.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">А</div>
            <div>
              <div class="review-card__name">Анна, 34 года</div>
              <div class="review-card__meta">12 сессий · тревога</div>
            </div>
          </div>
        </div>
        <div class="review-card reveal reveal-delay-1">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«Обращались с мужем, когда отношения были на грани. Елена создала безопасное пространство, где мы наконец начали слышать друг друга. Очень благодарны.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">М</div>
            <div>
              <div class="review-card__name">Марина и Дмитрий</div>
              <div class="review-card__meta">8 сессий · семейная терапия</div>
            </div>
          </div>
        </div>
        <div class="review-card reveal reveal-delay-2">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«После выгорания не мог заставить себя даже встать с кровати. Елена не давила, шла в моём темпе. Постепенно вернулся интерес к жизни и работе.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">С</div>
            <div>
              <div class="review-card__name">Сергей, 41 год</div>
              <div class="review-card__meta">15 сессий · выгорание</div>
            </div>
          </div>
        </div>
        <div class="review-card reveal">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«Привела подростка, который закрылся от всех. Елена нашла с ним контакт, а мне помогла понять, как поддерживать сына, не давя на него.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">Е</div>
            <div>
              <div class="review-card__name">Елена, мама подростка</div>
              <div class="review-card__meta">10 сессий · подросток</div>
            </div>
          </div>
        </div>
        <div class="review-card reveal reveal-delay-1">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«Долго не решалась идти к психологу. Елена с первой минуты создала ощущение, что меня слышат и принимают. Это было именно то, что мне нужно.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">О</div>
            <div>
              <div class="review-card__name">Ольга, 28 лет</div>
              <div class="review-card__meta">6 сессий · самооценка</div>
            </div>
          </div>
        </div>
        <div class="review-card reveal reveal-delay-2">
          <div class="review-card__stars">★★★★★</div>
          <p class="review-card__text">«Онлайн-формат оказался очень удобным. Качество работы ничуть не пострадало — наоборот, дома было ещё комфортнее открываться.»</p>
          <div class="review-card__author">
            <div class="review-card__avatar">К</div>
            <div>
              <div class="review-card__name">Кирилл, 37 лет</div>
              <div class="review-card__meta">9 сессий · онлайн</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTS -->
  <section class="section section--alt" id="contacts">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Связаться</span>
        <h2>Контакты</h2>
        <p>Напишите или позвоните — отвечу в течение рабочего дня</p>
      </div>
      <div class="contacts__grid">
        <div class="contacts__info">
          <h3 class="reveal">Как со мной связаться</h3>
          <div class="contact-item reveal reveal-delay-1">
            <div class="contact-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <div class="contact-item__label">Телефон</div>
              <div class="contact-item__value"><a href="tel:+79001234567">+7 (900) 123-45-67</a></div>
            </div>
          </div>
          <div class="contact-item reveal reveal-delay-2">
            <div class="contact-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <div class="contact-item__label">Email</div>
              <div class="contact-item__value"><a href="mailto:elena@example.ru">elena@example.ru</a></div>
            </div>
          </div>
          <div class="contact-item reveal reveal-delay-3">
            <div class="contact-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <div class="contact-item__label">Адрес кабинета</div>
              <div class="contact-item__value">г. Москва, ул. Примерная, д. 10, оф. 5</div>
            </div>
          </div>
          <div class="contact-item reveal reveal-delay-3">
            <div class="contact-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div>
              <div class="contact-item__label">Часы работы</div>
              <div class="contact-item__value">Пн–Сб, 10:00 – 20:00</div>
            </div>
          </div>
          <div class="contacts__social reveal">
            <a href="#" class="social-link" aria-label="WhatsApp">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="Telegram">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
            </a>
          </div>
        </div>
        <form class="contact-form reveal" id="contactForm">
          <h3>Записаться на консультацию</h3>
          <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" id="name" name="name" placeholder="Как к вам обращаться?" required>
          </div>
          <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__" required>
          </div>
          <div class="form-group">
            <label for="message">Сообщение (необязательно)</label>
            <textarea id="message" name="message" placeholder="Кратко опишите ваш запрос"></textarea>
          </div>
          <div class="form-checkbox">
            <input type="checkbox" id="consent" name="consent" required>
            <label for="consent">Согласен(на) на обработку персональных данных в соответствии с политикой конфиденциальности</label>
          </div>
          <button type="submit" class="btn btn--cta">Отправить заявку</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer__inner">
      <div>
        <div class="footer__logo">Елена <em>Мирная</em></div>
        <div class="footer__copy">© 2026 · Практикующий психолог</div>
      </div>
      <div class="footer__links">
        <a href="#about">Обо мне</a>
        <a href="#directions">Направления</a>
        <a href="#process">Как я работаю</a>
        <a href="#reviews">Отзывы</a>
        <a href="#contacts">Контакты</a>
      </div>
    </div>
  </footer>

  <!-- Cookie banner -->
  <div class="cookie-banner" id="cookieBanner">
    <div class="cookie-banner__inner">
      <p>Используя данный сайт, вы даёте согласие на использование файлов cookies. <a href="#">Политика конфиденциальности</a></p>
      <div class="cookie-banner__actions">
        <button class="btn btn--cta btn--sm" id="cookieAccept">Ок</button>
      </div>
    </div>
  </div>

  <script>
    (function () {
      'use strict';

      // Header scroll effect
      const header = document.getElementById('header');
      function onScroll() {
        header.classList.toggle('scrolled', window.scrollY > 40);
      }
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();

      // Mobile menu
      const burger = document.getElementById('burger');
      const mobileMenu = document.getElementById('mobileMenu');
      const menuOverlay = document.getElementById('menuOverlay');

      function toggleMenu(open) {
        burger.classList.toggle('active', open);
        mobileMenu.classList.toggle('open', open);
        menuOverlay.classList.toggle('open', open);
        document.body.style.overflow = open ? 'hidden' : '';
      }

      burger.addEventListener('click', () => toggleMenu(!mobileMenu.classList.contains('open')));
      menuOverlay.addEventListener('click', () => toggleMenu(false));
      document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
      });

      // Intersection Observer for scroll animations
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

      document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

      // Animated counters in hero
      function animateCounter(el) {
        const target = parseInt(el.dataset.count, 10);
        const duration = 1800;
        const start = performance.now();

        function update(now) {
          const progress = Math.min((now - start) / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          const current = Math.floor(eased * target);
          el.textContent = current + '+';
          if (progress < 1) requestAnimationFrame(update);
        }

        requestAnimationFrame(update);
      }

      const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            document.querySelectorAll('[data-count]').forEach(animateCounter);
            statsObserver.disconnect();
          }
        });
      }, { threshold: 0.5 });

      const heroStats = document.querySelector('.hero__stats');
      if (heroStats) statsObserver.observe(heroStats);

      // FAQ accordion
      document.querySelectorAll('.faq-item__question').forEach(btn => {
        btn.addEventListener('click', () => {
          const item = btn.closest('.faq-item');
          const isOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
          if (!isOpen) item.classList.add('open');
        });
      });

      // Contact form
      document.getElementById('contactForm').addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Спасибо! Ваша заявка отправлена. Я свяжусь с вами в ближайшее время.');
        e.target.reset();
      });

      // Cookie banner
      const cookieBanner = document.getElementById('cookieBanner');
      if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookieBanner.classList.add('visible'), 1200);
      }
      document.getElementById('cookieAccept').addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', '1');
        cookieBanner.classList.remove('visible');
      });

      // Smooth scroll for anchor links (fallback enhancement)
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
          const id = anchor.getAttribute('href');
          if (id === '#') return;
          const target = document.querySelector(id);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
          }
        });
      });
    })();
  </script>
</body>
</html>
