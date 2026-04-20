<?php
function inverserMot($mot) {
    $motInverser = "";
    for ($i = 0; $i < strlen($mot); $i++) {
        $motInverser = $mot[$i] . $motInverser;
    }
    return $motInverser;
}

$mot     = "";
$resultat = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mot = trim($_POST["mot"] ?? "");
    if ($mot !== "") {
        $resultat = inverserMot($mot);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverser un mot</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f4f0;
            font-family: 'DM Sans', sans-serif;
        }

        .card {
            background: #fff;
            border: 1px solid #e0ddd6;
            border-radius: 16px;
            padding: 40px 36px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
        }

        h1 {
            font-family: 'DM Mono', monospace;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: .04em;
            color: #1a1a1a;
            margin-bottom: 28px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 18px;
        }

        label {
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0ddd6;
            border-radius: 8px;
            font-family: 'DM Mono', monospace;
            font-size: .95rem;
            color: #1a1a1a;
            background: #fafaf8;
            transition: border-color .2s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #1a1a1a;
            background: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1a1a1a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: .9rem;
            font-weight: 500;
            cursor: pointer;
            letter-spacing: .03em;
            transition: background .2s, transform .1s;
            margin-top: 4px;
        }

        button:hover  { background: #333; }
        button:active { transform: scale(.98); }

        .result {
            margin-top: 22px;
            padding: 16px;
            background: #f5f4f0;
            border-radius: 8px;
            text-align: center;
        }

        .result .label {
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 8px;
        }

        .result .words {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .result .word {
            font-family: 'DM Mono', monospace;
            font-size: 1.4rem;
            font-weight: 500;
            color: #1a1a1a;
        }

        .result .arrow {
            font-size: 1rem;
            color: #bbb;
        }

        .result .word.inverted {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>inverser-mot.php</h1>

        <form method="POST">
            <div class="field">
                <label>Votre mot</label>
                <input type="text" name="mot"
                       value="<?= htmlspecialchars($mot) ?>"
                       placeholder="Bonjour" required>
            </div>

            <button type="submit">Inverser</button>
        </form>

        <?php if ($resultat !== null): ?>
            <div class="result">
                <div class="label">Résultat</div>
                <div class="words">
                    <span class="word"><?= htmlspecialchars($mot) ?></span>
                    <span class="arrow">→</span>
                    <span class="word inverted"><?= htmlspecialchars($resultat) ?></span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>