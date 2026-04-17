<?php
// Logique simplifiée au maximum
$nb1 = $_POST['nb1'] ?? '';
$nb2 = $_POST['nb2'] ?? '';
$op  = $_POST['op'] ?? '+';
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $nb1 !== '' && $nb2 !== '') {
    $n1 = (float)$nb1;
    $n2 = (float)$nb2;

    switch ($op) {
        case '+': $res = $n1 + $n2; 
        break;
        case '-': $res = $n1 - $n2;
        break;
        case '*': $res = $n1 * $n2; 
        break;
        case '/': $res = ($n2 != 0) ? $n1 / $n2 : "Erreur"; 
        break;
    }
    $message = "Résultat : $res";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>25-calculatrice.php</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f5f4f0; font-family: 'DM Sans', sans-serif; padding: 24px; }
        
        .card { background: #fff; border: 1px solid #e0ddd6; border-radius: 16px; padding: 40px 36px; width: 100%; max-width: 440px; box-shadow: 0 4px 24px rgba(0,0,0,.06); }
        
        h1 { font-family: 'DM Mono', monospace; font-size: 1.1rem; font-weight: 500; letter-spacing: .04em; color: #1a1a1a; margin-bottom: 28px; }
        
        .field { display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px; }
        label { font-size: .72rem; font-weight: 500; letter-spacing: .08em; text-transform: uppercase; color: #888; }
        
        input, select { 
            width: 100%; padding: 10px 12px; border: 1px solid #e0ddd6; border-radius: 8px; 
            font-family: 'DM Sans', sans-serif; font-size: .95rem; color: #1a1a1a; background: #fafaf8; 
        }
        
        input:focus, select:focus { outline: none; border-color: #1a1a1a; background: #fff; }
        
        button { 
            width: 100%; padding: 12px; background: #1a1a1a; color: #fff; border: none; 
            border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: .9rem; 
            font-weight: 500; cursor: pointer; margin-top: 4px; 
        }
        button:hover { background: #333; }

        .alert { margin-top: 22px; padding: 13px 16px; border-radius: 8px; font-size: .88rem; font-weight: 500; background: #edf7f0; color: #1f7a42; border: 1px solid #b8e6c8; text-align: center; }
        .error { background: #fdf2f2; color: #c0392b; border: 1px solid #f5c0bb; }
    </style>
</head>
<body>
    <div class="card">
        <h1>25-calculatrice.php</h1>

        <form method="POST">
            <div class="field">
                <label>Nombre 1</label>
                <input type="number" name="nb1" step="any" value="<?= htmlspecialchars((string)$nb1) ?>" required>
            </div>

            <div class="field">
                <label>Opération</label>
                <select name="op">
                    <option value="+" <?= $op=='+'?'selected':'' ?>>Addition (+)</option>
                    <option value="-" <?= $op=='-'?'selected':'' ?>>Soustraction (-)</option>
                    <option value="*" <?= $op=='*'?'selected':'' ?>>Multiplication (*)</option>
                    <option value="/" <?= $op=='/'?'selected':'' ?>>Division (/)</option>
                </select>
            </div>

            <div class="field">
                <label>Nombre 2</label>
                <input type="number" name="nb2" step="any" value="<?= htmlspecialchars((string)$nb2) ?>" required>
            </div>

            <button type="submit">Calculer</button>
        </form>

        <?php if ($message !== ""): ?>
            <div class="alert <?= strpos($message, 'Erreur') !== false ? 'error' : '' ?>">
                <?= $message ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>