<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap');
        
        :root {
            --dark-bg: #1A1A1A;
            --dark-card: #282828;
            --orange-accent: #FF5E00;
            --light-text: #E0E0E0;
            --light-grey-text: #B0B0B0;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: var(--light-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Header Section --- */
        header {
            background: linear-gradient(180deg, rgba(26, 26, 26, 0.8) 0%, rgba(26, 26, 26, 0.8) 100%), url('./images/header_background.png') no-repeat center center/cover;
            background-size: 150%;
            padding: 20px 0;
            position: relative;
            z-index: 10;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .nav-links a {
            color: var(--light-text);
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--orange-accent);
        }

        .cta-button {
            padding: 10px 25px;
            background-color: var(--orange-accent);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e65100;
        }

        .hero-section {
            text-align: center;
            padding: 80px 0;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 0 0 20px;
        }

        .hero-title span {
            color: var(--orange-accent);
        }
        
        /* New style for spacing */
        .hero-section p {
            margin-bottom: 20px;
        }

        /* --- Stats Cards --- */
        .stats-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
            padding: 40px 0;
        }

        .stat-card {
            background-color: var(--dark-card);
            border-radius: 20px;
            padding: 20px 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            flex: 1;
            max-width: 300px;
        }
        
        .stat-card-label {
            color: var(--orange-accent);
            font-weight: 500;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .stat-card-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            margin: 0;
        }
        
        /* --- Designed for Designers Section --- */
        .designers-panel {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 80px 20px;
            margin-top: 50px;
            text-align: left;
            position: relative;
        }

        .designers-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1000px;
            width: 100%;
            gap: 50px;
        }
        
        .designers-text {
            flex: 1;
            max-width: 600px;
        }
        
        .designers-text h2 {
            font-size: 3rem;
            font-weight: 800;
            margin: 0;
        }
        
        .designers-text h2 span {
            color: var(--orange-accent);
        }
        
        .designers-text p {
            color: var(--light-grey-text);
            font-size: 1rem;
            margin-top: 20px;
        }
        
        .designers-graphic {
            flex-shrink: 0;
        }

        /* --- Features Cards Section --- */
        .features-cards-section {
            padding: 80px 0;
        }
        
        .features-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            grid-auto-flow: row dense;
        }
        
        .features-card {
            background-color: var(--dark-card);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px; /* Ensure consistent height */
        }
        
        /* Specific card sizes */
        .features-card.large {
            grid-column: span 2;
        }
        
        .features-card.small {
            grid-column: span 1;
        }

        /* New grid layout for the 4 cards with alternating widths */
        .features-cards-grid.alternating-widths {
            grid-template-columns: repeat(3, 1fr);
        }

        .features-cards-grid.alternating-widths .features-card:nth-child(1) {
            grid-column: span 1;
        }

        .features-cards-grid.alternating-widths .features-card:nth-child(2) {
            grid-column: span 2;
        }
        
        .features-cards-grid.alternating-widths .features-card:nth-child(3) {
            grid-column: span 2;
        }

        .features-cards-grid.alternating-widths .features-card:nth-child(4) {
            grid-column: span 1;
        }

        .features-card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .features-card-icon {
            align-self: flex-start;
            margin-bottom: 20px;
            width: 40px;
            height: 40px;
            fill: var(--orange-accent);
        }
        
        .features-card-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .features-card-description {
            color: var(--light-grey-text);
            margin-top: 10px;
        }
        
        /* --- Customer Reviews Section --- */
        .reviews-section {
            padding: 40px 0;
            text-align: center;
        }

        .reviews-card {
            background-color: var(--dark-card);
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 20px;
            padding: 10px 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .avatars {
            display: flex;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--dark-card);
            margin-right: -10px;
            object-fit: cover;
        }
        
        .review-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .stars-container {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .star-svg {
            fill: var(--orange-accent);
            width: 20px;
            height: 20px;
        }

        .review-text {
            color: var(--light-grey-text);
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* --- Main Content Sections --- */
        .features-section, .pricing-section, .faq-section, .cta-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 20px;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .feature-card {
            background-color: var(--dark-card);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        /* New up and down pattern for the features grid */
        .features-grid .feature-card:nth-child(odd) {
            transform: translateY(40px);
        }

        .features-grid .feature-card:nth-child(even) {
            transform: translateY(-40px);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--orange-accent);
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .feature-description {
            color: var(--light-grey-text);
        }
        
        /* --- New Pricing Section --- */
        .pricing-section {
            padding: 80px 0;
            background: url('./images/price-back.png') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        .pricing-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .pricing-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .pricing-section .section-title {
            color: white;
            font-size: 3.5rem;
            font-weight: 800;
        }
        
        .pricing-section .section-subtitle {
            max-width: 600px;
            margin: 0 auto;
            color: var(--light-grey-text);
            margin-bottom: 30px;
        }

        .pricing-toggle {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 5px;
            display: inline-flex;
            margin-bottom: 40px;
        }

        .toggle-button {
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            color: var(--light-grey-text);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .toggle-button.active {
            background-color: var(--dark-card);
            color: var(--light-text);
        }

        .pricing-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .pricing-card {
            background-color: #000;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            border: 2px solid #000; /* Set initial border color to black */
            transition: transform 0.3s ease, border-color 0.3s ease;
            cursor: pointer;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: var(--orange-accent); /* Orange border on hover */
        }
        
        /* Active state for card selection */
        .pricing-card.selected-card {
            border-color: var(--orange-accent);
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 10px;
        }
        
        .price-text {
            color: white;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .price {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin: 10px 0;
        }
        
        .price-subtext {
            color: var(--light-grey-text);
            font-size: 0.9rem;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 20px 0 30px;
            text-align: left;
        }
        
        .pricing-features li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            color: var(--light-grey-text);
        }
        
        .pricing-features li svg {
            fill: var(--orange-accent); /* Change fill color to orange */
            margin-right: 10px;
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }
        
        .pricing-features li.included {
            color: var(--light-text);
        }
        
        .pricing-card-cta {
            padding: 12px 30px;
            background: linear-gradient(90deg, #FF5E00 0%, #FFA800 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 94, 0, 0.4);
            display: inline-block;
        }
        
        .pricing-card-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 94, 0, 0.6);
        }

        .pricing-card .discount {
            background-color: #333; /* Dark background for discount */
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-left: 10px;
        }

        /* --- Timeline Section --- */
        .timeline-section {
            padding: 80px 0;
            text-align: center;
        }

        .timeline-heading {
            max-width: 800px;
            margin: 0 auto 50px;
        }

        .timeline-heading p {
            color: var(--light-grey-text);
        }

        .timeline-wrapper {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-top: 50px;
            max-width: 1200px;
            margin: 0 auto;
            border-bottom: 2px dashed rgba(255, 255, 255, 0.2);
            padding-bottom: 40px;
        }

        .timeline-milestone {
            position: relative;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            z-index: 2;
            padding: 0 15px;
        }

        .milestone-year {
            font-size: 3rem;
            font-weight: 800;
            color: var(--orange-accent);
            margin-bottom: 10px;
        }

        .milestone-number {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 5px;
        }

        .milestone-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--light-text);
            margin: 0;
        }

        .milestone-description {
            font-size: 0.9rem;
            color: var(--light-grey-text);
            margin-top: 5px;
            text-align: center;
        }

        .milestone-content {
            background-color: var(--dark-card);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            position: relative;
            min-height: 100px; /* Adjust height */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .milestone-content img {
            border-radius: 10px;
        }

        .milestone-avatars, .milestone-project-images {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .milestone-avatars img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--dark-card);
            margin: 0 -8px;
            object-fit: cover;
        }

        .milestone-project-images img {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            object-fit: cover;
        }

        /* Dotted line connecting milestones */
        .timeline-wrapper::before {
            content: '';
            position: absolute;
            width: calc(100% - 60px);
            height: 2px;
            background: rgba(255, 255, 255, 0.2);
            top: 150px;
            left: 30px;
            z-index: 1;
        }
        
        .milestone-avatars,
        .milestone-project-images {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .milestone-avatars img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--dark-card);
            margin: 0 -8px;
            object-fit: cover;
        }
        
        .milestone-project-images img {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            object-fit: cover;
        }
        
        /* New style for the CTA button and slots text */
        .milestone-cta-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
        }

        .slots-text {
            color: var(--light-grey-text);
            font-size: 0.9rem;
        }


        /* --- FAQ Section --- */
        .faq-section {
            padding: 80px 0;
            text-align: center;
        }

        .faq-section h2 {
            font-size: 2.5rem;
            font-weight: 800;
        }

        .faq-section .subtitle {
            max-width: 600px;
            margin: 0 auto 40px;
            color: var(--light-grey-text);
        }

        .faq-container {
            max-width: 800px;
            margin: 40px auto 0;
        }

        .faq-item {
            background-color: var(--dark-card);
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-question-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            cursor: pointer;
        }
        
        .faq-question-container h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 0;
            color: var(--light-text);
        }

        .faq-icon {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
            color: var(--light-grey-text);
        }
        
        .faq-item.active .faq-answer {
            max-height: 200px; /* Adjust as needed */
            padding: 0 20px 20px;
        }
        
        /* --- Final CTA Section --- */
        .cta-section {
            padding: 80px 0;
            display: flex;
            justify-content: center;
        }
        
        .cta-container {
            max-width: 800px;
            background-color: var(--dark-card);
            text-align: center;
            border-radius: 20px;
            padding: 60px 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            margin: 0 auto;
        }

        .cta-container h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .cta-container p {
            margin-bottom: 30px; /* Added margin for spacing */
        }
        
        /* New CTA section styles */
        .cta-section-new {
            background: rgba(40, 40, 40, 0.8) url('image_e2c64e.png') no-repeat center center/cover;
            background-blend-mode: darken;
            border-radius: 20px;
            padding: 80px 40px;
            margin-top: 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .cta-section-new::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 94, 0, 0.1) 0%, rgba(26, 26, 26, 0.9) 70%);
            z-index: 1;
        }
        
        .cta-content-new {
            position: relative;
            z-index: 2;
        }
        
        .cta-content-new h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: white;
        }
        
        .cta-content-new p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--light-grey-text);
            font-size: 1.1rem;
        }
        
        /* New CTA button style */
        .cta-button-new {
            padding: 15px 40px;
            background: linear-gradient(90deg, #FF5E00 0%, #FFA800 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 94, 0, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .cta-button-new:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 94, 0, 0.6);
        }

        .cta-button-new svg {
            fill: white;
            width: 16px;
            height: 16px;
        }

        /* --- New Footer Section --- */
        .footer-new {
            background-color: var(--dark-bg);
            padding: 60px 0 20px;
            color: var(--light-text);
        }

        .footer-new .container {
            /* border-bottom: 1px solid var(--orange-accent); */ /* Removed orange line */
            padding-bottom: 40px;
        }

        .footer-new-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            text-align: left;
            gap: 20px;
        }

        .footer-new-column {
            flex: 1;
            min-width: 180px;
            margin-bottom: 20px;
        }

        .footer-new-column h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: white;
        }

        .footer-new-column p {
            font-size: 1rem;
            color: var(--light-grey-text);
            line-height: 1.6;
        }

        .footer-new-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-new-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-new-column ul li a {
            color: var(--light-grey-text);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-new-column ul li a:hover {
            color: var(--orange-accent);
        }

        .footer-new-social {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .footer-new-social a {
            color: white;
            transition: color 0.3s ease;
        }

        .footer-new-social a:hover {
            color: var(--orange-accent);
        }
        
        .footer-new-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            margin-top: 20px;
            border-top: 2px solid var(--orange-accent);
        }

        .footer-new-copyright {
            color: var(--light-grey-text);
            font-size: 0.9rem;
        }
        
        .footer-new-icons {
            display: flex;
            gap: 20px;
        }
        
        .footer-new-icons svg {
            fill: var(--light-grey-text);
            width: 24px;
            height: 24px;
            transition: fill 0.3s ease;
        }
        
        .footer-new-icons svg:hover {
            fill: var(--orange-accent);
        }

        /* --- Responsive Design --- */
        @media (max-width: 1024px) {
            .stats-cards {
                flex-wrap: wrap;
            }
            .stat-card {
                flex: 1 1 45%;
                max-width: 45%;
            }
            .features-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .features-cards-grid.alternating-widths .features-card:nth-child(2),
            .features-cards-grid.alternating-widths .features-card:nth-child(3) {
                grid-column: span 1;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 20px;
            }

            .nav-links, .cta-button {
                margin-top: 15px;
            }

            .hero-title, .designers-text h2 {
                font-size: 2.5rem;
            }
            
            .designers-content {
                flex-direction: column;
                text-align: center;
            }
            
            .designers-graphic {
                margin-top: 30px;
            }

            .stats-cards,
            .features-grid,
            .pricing-cards,
            .approach-grid {
                flex-direction: column;
                gap: 20px;
                display: flex; /* Override grid for mobile layout */
            }
            
            /* Ensure mobile view does not have up/down pattern */
            .features-grid .feature-card,
            .approach-card {
                transform: translateY(0) !important;
            }
            
            .features-cards-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-container h2 {
                font-size: 2rem;
            }
            
            .timeline-wrapper {
                flex-direction: column;
                align-items: stretch;
                padding-top: 0;
            }
            
            .timeline-wrapper::before {
                top: 0;
                bottom: 0;
                left: 50%;
                width: 2px;
                height: 100%;
                background: rgba(255, 255, 255, 0.2);
            }
            
            .timeline-milestone {
                padding: 40px 0;
                width: 100%;
            }

            .milestone-point {
                top: 50%;
                left: calc(50% - 7px);
            }
            
            .milestone-avatars img {
                margin: 0 4px;
            }

            .reviews-card {
                flex-direction: column;
                padding: 20px;
                text-align: center;
                border-radius: 20px;
                gap: 10px;
            }
            
            .faq-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-new-grid {
                flex-direction: column;
            }

            .footer-new-bottom {
                flex-direction: column-reverse;
                gap: 15px;
                text-align: center;
            }
        }
        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            .stats-cards {
                flex-direction: column;
            }
            .stat-card {
                max-width: 100%;
            }
            .reviews-card .avatars {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo-container">
                    <img src="./images/header_icon.png">
                    
                </div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">Contact</a>
                </div>
                <a href="#" class="cta-button">Sign Up</a>
            </nav>
            
            <section class="reviews-section">
                <div class="reviews-card">
                    <div class="avatars">
                        <img src="./images/Cus-1.png" alt="Client 1" class="avatar">
                        <img src="./images/Cus-2.png" alt="Client 2" class="avatar">
                        <img src="./images/Cus-3.png" alt="Client 3" class="avatar">
                        <img src="./images/Cus-4.png" alt="Client 4" class="avatar">
                    </div>
                    <div class="review-info">
                        <div class="stars-container">
                            <svg class="star-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.62L12 2L9.19 8.62L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FF5E00"/>
                            </svg>
                            <svg class="star-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.62L12 2L9.19 8.62L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FF5E00"/>
                            </svg>
                            <svg class="star-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.62L12 2L9.19 8.62L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FF5E00"/>
                            </svg>
                            <svg class="star-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.62L12 2L9.19 8.62L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FF5E00"/>
                            </svg>
                            <svg class="star-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.62L12 2L9.19 8.62L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FF5E00"/>
                            </svg>
                        </div>
                        <div class="review-text">115+ happy clients</div>
                    </div>
                </div>
            </section>

            <div class="hero-section">
                <h1 class="hero-title">Automate <span>Intelligence.</span><br>Accelerate Growth.</h1>
                <p>Our AI-powered SaaS platform empowers businesses to streamline operations, automate repetitive tasks, and make smarter, data-driven decisions—all from one intuitive dashboard.</p>
                <a href="#" class="cta-button">Learn More</a>

                <section class="stats-cards">
                    <div class="stat-card">
                        <p class="stat-card-label">Clients</p>
                        <h3 class="stat-card-number">120K+</h3>
                    </div>
                    <div class="stat-card">
                        <p class="stat-card-label">Projects</p>
                        <h3 class="stat-card-number">150+</h3>
                    </div>
                    <div class="stat-card">
                        <p class="stat-card-label">5-Star Reviews</p>
                        <h3 class="stat-card-number">32K+</h3>
                    </div>
                </section>
            </div>
        </div>
    </header>

    <main>
        <section class="designers-panel">
            <div class="designers-content">
                <div class="designers-text">
                    <h2>Designed for Designers.</h2>
                    <h2>Powered by <span>AI.</span></h2>
                    <p>Unlock the full potential of your creativity with our AI-powered design assistant. Explore new dimensions of design.</p>
                </div>
                <div class="designers-graphic">
                    <img src="./images/design-icon.png" alt="Designed for Designers">
                </div>
            </div>
        </section>
        
        <section class="features-cards-section">
            <div class="container">
                <div class="features-cards-grid alternating-widths">
                    <div class="features-card small">
                        <div class="features-card-content">
                            <svg class="features-card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 11.5L12 8.5L9 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 11.5V15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h3 class="features-card-title">Instant Ideation</h3>
                            <p class="features-card-description">Skip the blank canvas and spark creativity instantly. Our AI generates high-quality, on-brand design concepts within seconds.</p>
                        </div>
                    </div>
                    <div class="features-card large">
                        <div class="features-card-content">
                            <svg class="features-card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 16C16 14.5 15 13 12 13C9 13 8 14.5 8 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h3 class="features-card-title">Smart Adaptability</h3>
                            <p class="features-card-description">No two creators are the same, and neither are their styles. Our AI learns from your inputs, understands your aesthetic preferences, and fine-tunes every design to match your unique vision. This smart adaptability ensures that the output is not just a generic template, but a truly personalized creation that resonates with your brand.</p>
                        </div>
                    </div>
                    <div class="features-card large">
                        <div class="features-card-content">
                            <svg class="features-card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12L14 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 10V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h3 class="features-card-title">Multi-Format Export</h3>
                            <p class="features-card-description">Design once, export anywhere. Whether you need high-res graphics for print, responsive visuals for the web, or mobile-optimized assets, our platform provides seamless, multi-format export options. This flexibility ensures your designs look perfect on any platform, saving you time and effort.</p>
                        </div>
                    </div>
                    <div class="features-card small">
                        <div class="features-card-content">
                            <svg class="features-card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 6V18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 12H18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h3 class="features-card-title">Seamless Revisions</h3>
                            <p class="features-card-description">Say goodbye to repetitive tweaks and endless back-and-forths. With intuitive prompt-based editing, you can make instant, global changes to your design without redoing any work. Our AI handles the details, so you can focus on the vision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="timeline-section">
            <div class="container">
                <div class="timeline-heading">
                    <p>Whether you're designing for personal projects, creative teams, or large-scale campaigns, our AI-powered platform is built to bring your ideas to life—quickly, beautifully, and intelligently. And the results? The numbers speak for themselves:</p>
                </div>
                <div class="timeline-wrapper">
                    <div class="timeline-milestone">
                        <div class="milestone-number">2014</div>
                        <p class="milestone-title">Year of establishment</p>
                        <p class="milestone-description">More than 10 years in the field</p>
                        <div class="milestone-content">
                            <div class="milestone-avatars">
                                <img src="./images/2014-1.png" alt="Client 1" class="avatar">
                                <img src="./images/2014-2.png" alt="Client 2" class="avatar">
                                <img src="./images/2014-3.png" alt="Client 3" class="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-milestone">
                        <div class="milestone-number">304</div>
                        <p class="milestone-title">Projects are launched</p>
                        <p class="milestone-description">A lot of projects are done</p>
                        <div class="milestone-content">
                            <div class="milestone-project-images">
                                <img src="./images/304-(1).png" alt="Project 1">
                                <img src="./images/304-(2).png" alt="Project 2">
                                <img src="./images/304- (3).png" alt="Project 2">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-milestone">
                        <div class="milestone-number">189</div>
                        <p class="milestone-title">Clients are satisfied</p>
                        <p class="milestone-description">These people love us</p>
                        <div class="milestone-content">
                            <div class="milestone-avatars">
                                <img src="./images/189-1.png" alt="Client 1" class="avatar">
                                <img src="./images/189-2.png" alt="Client 2" class="avatar">
                                <img src="./images/189-3.png" alt="Client 3" class="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-milestone">
                        <div class="milestone-number">12</div>
                        <p class="milestone-title">Projects in work</p>
                        <p class="milestone-description">What we do right now</p>
                        <div class="milestone-content">
                            <div class="milestone-project-images">
                                <img src="./images/2.png" alt="Project 1">
                                <img src="./images/4.png" alt="Project 2">
                                 <img src="./images/304-(1).png" alt="Project 2">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="milestone-cta-wrapper">
                    <a href="#" class="cta-button">Get Started</a>
                    <p class="slots-text">Slots are available <span style="color: #4CAF50;">•</span></p>
                </div>
            </div>
        </section>

        <section class="pricing-section">
            <div class="container pricing-content">
                <h2 class="section-title">Choose the Plan<br>That's Right for You</h2>
                <p class="section-subtitle">Giving you access to essential features and over 1,000 creative tools. Upgrade to the Pro Plan to unlock powerful AI capabilities, cloud syncing, and a whole new level of creative freedom.</p>
                <div class="pricing-toggle">
                    <div class="toggle-button active" onclick="togglePricing('monthly')">Monthly</div>
                    <div class="toggle-button" onclick="togglePricing('yearly')">Yearly</div>
                </div>
                <div class="pricing-cards">
                    <div class="pricing-card">
                        <h3>Free</h3>
                        <p class="price-text">Everything you need to supercharge your productivity.</p>
                        <h2 class="price">$0 <span class="price-subtext">/ month</span></h2>
                        <ul class="pricing-features">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span class="included">What's included</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>20 design generations/month</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Low-res downloads</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Basic style presets</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Limited customization options</span>
                            </li>
                        </ul>
                        <a href="#" class="pricing-card-cta">Subscribe</a>
                    </div>
                    <div class="pricing-card">
                        <h3>Pro</h3>
                        <p class="price-text">Unlock a new level of your personal productivity.</p>
                        <h2 class="price">$17 <span class="price-subtext">/ month</span><span class="discount">-20%</span></h2>
                        <ul class="pricing-features">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Everything in Free</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Enigma AI</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Unlimited design generations</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Custom Themes</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>High-resolution exports</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Custom Extensions</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Developer Tools</span>
                            </li>
                        </ul>
                        <a href="#" class="pricing-card-cta">Subscribe</a>
                    </div>
                    <div class="pricing-card">
                        <h3>Team</h3>
                        <p class="price-text">Everything you need to supercharge your productivity.</p>
                        <h2 class="price">$37 <span class="price-subtext">/ month</span><span class="discount">-20%</span></h2>
                        <ul class="pricing-features">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Everything in Free</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Unlimited Shared Commands</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Unlimited Shared Quicklinks</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.5 16.5L6 12L7.5 10.5L10.5 13.5L16.5 7.5L18 9L10.5 16.5Z" fill="currentColor"/></svg>
                                <span>Priority support</span>
                            </li>
                        </ul>
                        <a href="#" class="pricing-card-cta">Subscribe</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <p class="subtitle">Got questions? We've got answers. Find everything you need to know about using our platform, plans, and features</p>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question-container">
                            <h3>What is an AI Landing Page?</h3>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4.5V19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 12H19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="faq-answer">
                            <p>An AI landing page is a specialized web page that uses artificial intelligence to personalize content and optimize user experience for better conversion rates.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question-container">
                            <h3>How does it help my business?</h3>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4.5V19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 12H19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="faq-answer">
                            <p>By using AI, the page can adapt its content, offers, and calls to action to individual visitors, which can significantly increase engagement and lead to higher sales.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question-container">
                            <h3>Is it easy to set up?</h3>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4.5V19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 12H19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="faq-answer">
                            <p>Our platform is designed for simplicity. With our intuitive interface, you can set up and launch your AI-powered landing page in minutes, without any coding knowledge.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question-container">
                            <h3>Can I integrate with other tools?</h3>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4.5V19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 12H19.5" stroke="#FF5E00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, our platform is built for seamless integration with popular marketing, sales, and analytics tools, allowing you to connect your data and workflows easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="cta-section">
            <div class="cta-container">
                <h2>Ready to Design Smarter?</h2>
                <p>Join over 120,000 businesses already using our AI to automate tasks, personalize experiences, and grow their bottom line.</p>
                <a href="#" class="cta-button">Get Started</a>
            </div>
        </section>
    </main>

    <footer class="footer-new">
        <div class="container">
            <div class="footer-new-grid">
                <div class="footer-new-column">
                    <h4>About Us</h4>
                    <p>We're a team of designers, engineers, and innovators building AI tools that empower anyone to turn imagination into stunning visuals—faster, smarter, and effortlessly.</p>
                </div>
                <div class="footer-new-column">
                    <h4 style="color:#e65100;">Useful Links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Prices</a></li>
                    </ul>
                </div>
                <div class="footer-new-column">
                    <h4 style="color:#e65100;">Help</h4>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-new-column">
                    <h4 style="color:#e65100;">Connect With Us</h4>
                    <p>27 Division St, New York, NY 10002, USA</p>
                    <p>+123 324 2653</p>
                    <p>username@mail.com</p>
                </div>
            </div>
        </div>
        <div class="container footer-new-bottom">
            
            <p class="footer-new-copyright">&copy; 2024 All Right Reserved.</p>
            <div class="footer-new-icons">
                <a href="#">
                    <svg fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.0228 5.66667 21 10 22V14H8V12H10V10C10 7.79086 11.7909 6 14 6H16V9H14C13.4477 9 13 9.44772 13 10V12H16L15 14H13V22C17.3333 21 21 17.0228 21 12C21 6.47715 16.5228 2 12 2Z"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 4.02C21.127 4.417 20.198 4.678 19.23 4.802C20.22 4.195 20.94 3.237 21.28 2.115C20.377 2.651 19.38 3.033 18.33 3.242C17.47 2.302 16.29 1.714 15.01 1.714C12.56 1.714 10.57 3.704 10.57 6.15C10.57 6.48 10.61 6.81 10.68 7.12C7.79 5.68 5.22 3.17 3.51 1.07C3.19 1.63 3.01 2.29 3.01 2.98C3.01 4.54 3.79 5.86 5.08 6.64C4.35 6.62 3.65 6.43 3.02 6.08V6.15C3.02 8.41 4.65 10.29 6.94 10.7C6.55 10.81 6.13 10.86 5.69 10.86C5.38 10.86 5.07 10.83 4.78 10.76C5.4 12.63 7.15 13.98 9.21 14.02C7.57 15.28 5.48 16.03 3.24 16.03C2.86 16.03 2.47 16.01 2.09 15.96C4.24 17.35 6.81 18.17 9.58 18.17C16.96 18.17 21.01 12.18 21.01 6.91C21.01 6.74 21.01 6.57 21 6.41C21.75 5.86 22.42 5.17 22.98 4.41Z"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.5 6.5H17.51" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.47715 2 2 6.47715 2 12C2 16.42 4.909 20.14 8.76 21.4C9.26 21.49 9.41 21.19 9.41 20.91V19.46C6.73 20.01 6.13 18.06 6.13 18.06C5.69 16.92 5.09 16.63 5.09 16.63C4.24 16.03 5.16 16.04 5.16 16.04C6.09 16.14 6.58 17.06 6.58 17.06C7.43 18.52 8.79 18.1 9.35 17.86C9.43 17.27 9.66 16.89 9.92 16.66C7.81 16.42 5.49 15.65 5.49 11.96C5.49 10.9 5.86 10.02 6.47 9.34C6.37 9.06 6.07 8.21 6.55 7.02C6.55 7.02 7.47 6.72 9.4 8.01C10.27 7.78 11.23 7.67 12.19 7.67C13.15 7.67 14.11 7.78 14.98 8.01C16.91 6.72 17.83 7.02 17.83 7.02C18.31 8.21 18.01 9.06 17.91 9.34C18.52 10.02 18.89 10.9 18.89 11.96C18.89 15.66 16.57 16.42 14.46 16.66C14.72 16.89 14.95 17.27 15.03 17.86C15.59 18.1 16.95 18.52 17.8 17.06C17.8 17.06 18.3 16.14 19.23 16.04C19.23 16.04 20.15 16.03 19.3 16.63C19.3 16.63 18.7 18.06 16.02 19.46V20.91C16.02 21.19 16.17 21.49 16.67 21.4C20.53 20.14 23.42 16.42 23.42 12C23.42 6.47715 18.9428 2 13.42 2C13.42 2 12 2 12 2Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question-container');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.closest('.faq-item');
                faqItem.classList.toggle('active');
            });
        });
    });
</script>
</body>
</html>