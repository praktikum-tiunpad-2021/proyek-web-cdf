import { BrowserRouter as Router, Route, Switch } from "react-router-dom"
import LandingPage from "./pages/LandingPage"
import Login from "./pages/Login"

function App() {
  return (
    <Router>
      <div className="App">
        <section className="contents">
          <Switch>
            <Route exact path="/">
              <LandingPage />
            </Route>
            <Route path="/login">
              <Login />
            </Route>
          </Switch>
        </section>
      </div>
    </Router>
  );
}

export default App;
