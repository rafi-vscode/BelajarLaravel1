<svg {{ $attributes }} viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background untuk efek glow -->
    <defs>
        <filter id="glow">
            <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
            <feMerge>
                <feMergeNode in="coloredBlur"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
    </defs>
    
    <!-- Teks AnimeVerse dengan gradient ungu -->
    <text x="100" y="38" 
          font-family="'Figtree', Arial, sans-serif" 
          font-size="28" 
          font-weight="700" 
          text-anchor="middle" 
          fill="url(#gradient)" 
          filter="url(#glow)">
        AnimeVerse
    </text>
    
    <!-- Gradient Definition -->
    <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#8a2be2;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#a855f7;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#8a2be2;stop-opacity:1" />
        </linearGradient>
    </defs>
</svg>
