/**
 * Vercel Serverless: mismo contrato que el backend de ciudades del booker Vue.
 * GET /api/vuelos?a=fly&query=...&recommendation=true&size=5
 */
const places = require('./places.json');

function normalize(str) {
    return String(str || '')
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '');
}

module.exports = function handler(req, res) {
    res.setHeader('Content-Type', 'application/json; charset=utf-8');
    res.setHeader('Access-Control-Allow-Origin', '*');
    if (req.method === 'OPTIONS') {
        res.setHeader('Access-Control-Allow-Methods', 'GET, OPTIONS');
        res.setHeader('Access-Control-Allow-Headers', 'Content-Type');
        return res.status(204).end();
    }
    if (req.method !== 'GET') {
        return res.status(405).json({ error: 'Method not allowed' });
    }

    const q = normalize(req.query.query || '');
    const rec = req.query.recommendation === 'true' || req.query.recommendation === true;
    const rawSize = parseInt(String(req.query.size || '15'), 10);
    const size = Number.isFinite(rawSize) ? Math.min(Math.max(rawSize, 1), 50) : 15;

    let out;
    if (!q && rec) {
        out = [...places].sort((a, b) => (b.positions || 0) - (a.positions || 0)).slice(0, size);
    } else if (q.length >= 1) {
        out = places
            .filter((p) => {
                const hay = normalize(`${p.displayText || ''} ${p.code || ''} ${p.displayDestinationHtml || ''}`);
                return hay.includes(q);
            })
            .slice(0, size);
    } else {
        out = [];
    }

    return res.status(200).json(out);
};
