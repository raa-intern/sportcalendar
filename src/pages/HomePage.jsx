import React from "react";
import Header from "../components/Header";
import Footer from "../components/Footer";
import EventCard from "../components/EventCard";
import { Container } from "@mui/material";

export default function HomePage() {
  return (
    <>
      <Header />
      <Container maxWidth="xl" sx={{ height: "100vh" }}>
        <EventCard />
      </Container>
      <Footer />
    </>
  );
}
