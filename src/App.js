import { Switch, Route, Redirect } from "react-router-dom";
import HomePage from "./pages/HomePage";
import EventPage from "./pages/EventPage";

function App() {
  return (
    <Switch>
      <Route path="/" exact>
        <HomePage />
      </Route>
      <Route path="/event/:eventId">
        <EventPage />
      </Route>
      <Redirect to="/" />
    </Switch>
  );
}

export default App;
