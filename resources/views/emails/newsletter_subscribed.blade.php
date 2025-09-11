<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue chez DentalPro</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; margin:0;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
        
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="DentalPro" style="max-height: 70px;">
        </div>

        <h2 style="color: #103178; text-align: center;">Bienvenue dans notre Newsletter 🎉</h2>

        <p>Bonjour,</p>
        <p>Merci de vous être inscrit(e) à la newsletter <strong>DentalPro</strong>.</p>
        <p>En cadeau de bienvenue, vous bénéficiez de <strong>100 MAD de réduction</strong> sur votre première commande.</p>

        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ route('products.index') }}" 
               style="background-color:#ff9900; color:#fff; padding: 12px 25px; text-decoration:none; border-radius:5px; font-weight:bold;">
                Découvrir nos produits
            </a>
        </div>

        <p style="margin-top:20px;">À très vite,<br><strong>L’équipe DentalPro</strong></p>

        <hr style="margin:30px 0; border:none; border-top:1px solid #eee;">

        <p style="font-size: 12px; color: #777; text-align:center;">
            Vous recevez cet email car vous vous êtes inscrit à la newsletter DentalPro.<br>
            Si vous ne souhaitez plus recevoir nos emails, vous pouvez <a href="#" style="color:#103178;">vous désinscrire ici</a>.
        </p>
    </div>
</body>
</html>
