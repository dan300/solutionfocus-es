<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #0d9488; border-bottom: 2px solid #0d9488; padding-bottom: 10px;">
            Nuevo mensaje de contacto
        </h2>
        
        <div style="background-color: #f3f4f6; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <p><strong>Nombre:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            @if(isset($phone) && $phone)
                <p><strong>Teléfono:</strong> {{ $phone }}</p>
            @endif
        </div>
        
        <div style="margin: 20px 0;">
            <strong>Mensaje:</strong>
            <p style="white-space: pre-wrap;">{{ $message }}</p>
        </div>
        
        <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">
        
        <p style="color: #6b7280; font-size: 14px;">
            Este mensaje fue enviado desde el formulario de contacto de solutionfocus.es
        </p>
    </div>
</body>
</html>

