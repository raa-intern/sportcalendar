import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";
import * as Yup from "yup";
import "yup-phone";
import {
  Wrap,
  Text,
  TextWrap,
  Label,
  Field,
  FieldWrap,
  Error,
  Button,
} from "./LoginForm.styled";

const LogInSchema = Yup.object().shape({
  email: Yup.string().email().required("Required"),
  password: Yup.string()
    .min(6, "Password is too short - should be 7 chars minimum.")
    .required("Required"),
});

export default function LoginForm() {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm({
    resolver: yupResolver(LogInSchema),
  });

  const onSubmit = (newUser) => console.log(newUser);

  return (
    <Wrap>
      <form onSubmit={handleSubmit(onSubmit)}>
        <TextWrap>
          <Text>Для реєстрації введіть пошту та пароль:</Text>
          <div>
            <Label>
              {errors.email && <Error> * </Error>}
              Электрона пошта:
            </Label>
            <Field
              type="email"
              {...register("email")}
              placeholder="your@email.com"
            />
            {errors.email && <Error>{errors.email.message}</Error>}
          </div>
          <FieldWrap>
            <Label>{errors.password && <Error> * </Error>} Пароль:</Label>
            <Field
              type="password"
              {...register("password")}
              placeholder="********"
            />
            {errors.password && <Error>{errors.password.message}</Error>}
          </FieldWrap>
          <Button>Зареєструватися</Button>
        </TextWrap>
      </form>
    </Wrap>
  );
}
