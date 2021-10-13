import React from "react";
import Header from "../components/Header";
import Footer from "../components/Footer";

export default function HomePage() {
  return (
    <>
      <Header />
      <div style={{ height: "100vh", textAlign: "center" }}>
        HOMEPAGE CONTENT HERE
      </div>
      <Footer />
    </>
  );
}
