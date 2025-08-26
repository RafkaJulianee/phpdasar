import React from "react";


const stats = [
    { label: "Users", value: 1240 },
    { label: "Sales", value: 312 },
    { label: "Revenue", value: "$8,400" },
    { label: "Active Sessions", value: 87 },
];

const recentActivities = [
    { id: 1, activity: "User JohnDoe signed up", time: "2 mins ago" },
    { id: 2, activity: "Order #1234 completed", time: "10 mins ago" },
    { id: 3, activity: "Payment received", time: "30 mins ago" },
    { id: 4, activity: "User Jane updated profile", time: "1 hour ago" },
];

function StatCard({ label, value }) {
    return (
        <div style={{
            background: "#fff",
            borderRadius: 8,
            padding: 24,
            boxShadow: "0 2px 8px rgba(0,0,0,0.05)",
            flex: 1,
            margin: 8,
            minWidth: 120,
            textAlign: "center"
        }}>
            <div style={{ fontSize: 28, fontWeight: 700 }}>{value}</div>
            <div style={{ color: "#888", marginTop: 8 }}>{label}</div>
        </div>
    );
}

function ActivityItem({ activity, time }) {
    return (
        <div style={{
            padding: "12px 0",
            borderBottom: "1px solid #eee",
            display: "flex",
            justifyContent: "space-between"
        }}>
            <span>{activity}</span>
            <span style={{ color: "#aaa", fontSize: 12 }}>{time}</span>
        </div>
    );
}

export default function App() {
    return (
        <div style={{
            minHeight: "100vh",
            background: "#f4f6fa",
            fontFamily: "Segoe UI, Arial, sans-serif",
            padding: 32
        }}>
            <header style={{ marginBottom: 32 }}>
                <h1 style={{ margin: 0, fontSize: 32, fontWeight: 700 }}>Dashboard</h1>
                <p style={{ color: "#666" }}>Welcome back! Here’s what’s happening today.</p>
            </header>
            <section style={{ display: "flex", gap: 16, marginBottom: 32, flexWrap: "wrap" }}>
                {stats.map((stat) => (
                    <StatCard key={stat.label} label={stat.label} value={stat.value} />
                ))}
            </section>
            <section style={{
                background: "#fff",
                borderRadius: 8,
                boxShadow: "0 2px 8px rgba(0,0,0,0.05)",
                padding: 24,
                maxWidth: 500
            }}>
                <h2 style={{ margin: "0 0 16px 0", fontSize: 20 }}>Recent Activities</h2>
                {recentActivities.map((item) => (
                    <ActivityItem key={item.id} activity={item.activity} time={item.time} />
                ))}
            </section>
        </div>
    );
}