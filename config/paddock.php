<?php

// Dados mockados do Paddock64 — mesma fonte de dados usada no protótipo web
// e no app mobile, só que em PHP. Quando entrar o banco de dados, isso vira
// Models/Migrations e esse arquivo pode ser removido.

return [

    'seller' => [
        'name' => 'Rafael Miniaturas',
        'rating' => '4.9',
        'deals' => 212,
        'location' => 'Maringá, PR',
        'initials' => 'RM',
    ],

    'catalog' => [
        ['id' => '1', 'ref' => '1:64-0031', 'title' => "Kombi Aventura '78", 'cat' => 'Off-Road', 'price' => '64,90', 'badge' => 'novo', 'badgeLabel' => 'NOVO', 'color' => '#1F5C4E'],
        ['id' => '2', 'ref' => '1:64-0042', 'title' => "Fusca Turbo Retrô '73", 'cat' => 'Clássicos', 'price' => '89,90', 'badge' => 'raro', 'badgeLabel' => 'RARO', 'color' => '#FF5722'],
        ['id' => '3', 'ref' => '1:64-0117', 'title' => 'Hatch Rebaixado GT', 'cat' => 'JDM', 'price' => '42,00', 'badge' => 'usado', 'badgeLabel' => 'MENTA', 'color' => '#9CA3A8'],
        ['id' => '4', 'ref' => '1:64-0055', 'title' => 'Pickup 4x4 Trilha', 'cat' => 'Off-Road', 'price' => '57,50', 'badge' => 'novo', 'badgeLabel' => 'NOVO', 'color' => '#F5B700'],
        ['id' => '5', 'ref' => '1:64-0089', 'title' => "Muscle Classic '68", 'cat' => 'Muscle Cars', 'price' => '112,00', 'badge' => 'raro', 'badgeLabel' => 'RARO', 'color' => '#FF5722'],
        ['id' => '6', 'ref' => '1:64-0203', 'title' => 'Stock Car Nacional', 'cat' => 'Edição Limitada', 'price' => '135,00', 'badge' => 'raro', 'badgeLabel' => 'ED. LTD', 'color' => '#1F5C4E'],
        ['id' => '7', 'ref' => '1:64-0064', 'title' => 'Buggy Praieiro', 'cat' => 'Off-Road', 'price' => '38,90', 'badge' => 'novo', 'badgeLabel' => 'NOVO', 'color' => '#9CA3A8'],
        ['id' => '8', 'ref' => '1:64-0071', 'title' => 'Caminhão Baú Entregas', 'cat' => 'Caminhões', 'price' => '71,00', 'badge' => 'usado', 'badgeLabel' => 'USADO', 'color' => '#F5B700'],
    ],

    'categorias' => ['Todos', 'Muscle Cars', 'JDM', 'Off-Road', 'Clássicos', 'Caminhões', 'Edição Limitada'],

    'auctions' => [
        [
            'id' => 'a1',
            'ref' => '1:64-0089',
            'title' => "Muscle Classic '68",
            'cat' => 'Muscle Cars · Edição Especial',
            'currentBid' => 'R$ 168,00',
            'minNextBid' => 'R$ 175,00',
            'bidsCount' => 14,
            'endsAt' => '04h 22min',
            'color' => '#FF5722',
            'seller' => ['name' => 'Clássicos Maringá', 'rating' => '4.8', 'deals' => 87, 'location' => 'Maringá, PR', 'initials' => 'CM'],
            'history' => [
                ['name' => 'João C.', 'initials' => 'JC', 'value' => 'R$ 168,00', 'time' => 'há 2 min'],
                ['name' => 'Marina P.', 'initials' => 'MP', 'value' => 'R$ 155,00', 'time' => 'há 11 min'],
                ['name' => 'Rafael M.', 'initials' => 'RM', 'value' => 'R$ 140,00', 'time' => 'há 26 min'],
            ],
        ],
        [
            'id' => 'a2',
            'ref' => '1:64-0203',
            'title' => 'Stock Car Nacional',
            'cat' => 'Edição Limitada',
            'currentBid' => 'R$ 220,00',
            'minNextBid' => 'R$ 230,00',
            'bidsCount' => 9,
            'endsAt' => '01h 05min',
            'color' => '#1F5C4E',
            'seller' => ['name' => 'Toni Sorteios', 'rating' => '4.7', 'deals' => 63, 'location' => 'Curitiba, PR', 'initials' => 'TS'],
            'history' => [
                ['name' => 'Ana L.', 'initials' => 'AL', 'value' => 'R$ 220,00', 'time' => 'há 4 min'],
                ['name' => 'Toni S.', 'initials' => 'TS', 'value' => 'R$ 200,00', 'time' => 'há 40 min'],
            ],
        ],
    ],

    'sorteios' => [
        [
            'id' => 's1',
            'ref' => '1:64-0203',
            'title' => 'Stock Car Nacional — Ed. Limitada',
            'cat' => 'Edição Limitada',
            'participants' => ['RM', 'JC', 'MP', 'TS', 'AL', 'BR', 'CV', 'DL', 'EM', 'FN'],
            'color' => '#F5B700',
        ],
        [
            'id' => 's2',
            'ref' => '1:64-0064',
            'title' => 'Buggy Praieiro',
            'cat' => 'Off-Road',
            'participants' => ['RM', 'JC', 'MP'],
            'color' => '#9CA3A8',
        ],
    ],

    'chats' => [
        [
            'id' => 'c1',
            'name' => 'Rafael Miniaturas',
            'color' => '#FF5722',
            'itemRef' => '1:64-0042',
            'itemTitle' => "Fusca Turbo Retrô '73",
            'messages' => [
                ['text' => 'Oi! Ainda tá disponível o Fusca Turbo Retrô?', 'out' => false],
                ['text' => 'Tá sim! Quer que eu separe pra você?', 'out' => true],
                ['text' => 'Quero! Consegue enviar com seguro?', 'out' => false],
                ['text' => 'Consigo enviar com seguro sim, fica R$ 12 a mais no frete.', 'out' => true],
            ],
        ],
        [
            'id' => 'c2',
            'name' => 'Clássicos Maringá',
            'color' => '#1F5C4E',
            'itemRef' => '1:64-0089',
            'itemTitle' => "Muscle Classic '68",
            'messages' => [
                ['text' => 'Boa tarde! Vi que você deu um lance no Muscle Classic.', 'out' => false],
                ['text' => 'Sim! Vou acompanhar até o fim hoje à noite.', 'out' => true],
                ['text' => 'Fechado, te aviso quando o leilão terminar.', 'out' => false],
            ],
        ],
        [
            'id' => 'c3',
            'name' => 'Grupo Sorteio Stock Car',
            'color' => '#F5B700',
            'itemRef' => '1:64-0203',
            'itemTitle' => 'Stock Car Nacional',
            'messages' => [
                ['text' => 'Sorteio sai hoje às 20h, pessoal!', 'out' => false],
                ['text' => 'Marina P.: consegui, obrigada!', 'out' => false],
            ],
        ],
    ],

    'posts' => [
        [
            'id' => 'p1',
            'author' => 'Rafael Miniaturas',
            'time' => 'há 2h · Maringá, PR',
            'caption' => 'Chegou o lote novo de clássicos nacionais! Quem quiser dar uma olhada antes de ir pra vitrine, corre no chat 🏁',
            'likes' => 128,
            'color' => '#FF5722',
        ],
        [
            'id' => 'p2',
            'author' => 'Clássicos Maringá',
            'time' => 'há 5h · Leilão ao vivo',
            'caption' => "Faltam 4h pro fim do leilão do Muscle Classic '68. Lance atual: R\$ 168 👀",
            'likes' => 76,
            'color' => '#F5B700',
        ],
        [
            'id' => 'p3',
            'author' => 'JDM Brasil',
            'time' => 'há 1 dia',
            'caption' => 'Restauração de um Hatch Rebaixado terminada. Antes e depois nos stories!',
            'likes' => 214,
            'color' => '#1F5C4E',
        ],
    ],

];
